<?php

session_start();

require('connect.php');

function tt($value) {
	echo '<pre>';
	print_r($value);
	echo '</pre>';
	exit();
}

// Проверка выполнения запроса к БД
function checkError($query) {
	$errInfo = $query->errorInfo();
	if ($errInfo[0] !== PDO::ERR_NONE) {
		echo $errInfo[2];
		exit();
	}
	return true;
}

// При наличии параметров для select
function checkParameters($sql, $params) {
	if(!empty($params)) {
		$i = 0;
		foreach ($params as $key => $value) {
			if(!is_numeric($value)) {
				$value = "'" . $value . "'";
			}
			if($i === 0) {
				$sql = $sql . " WHERE $key = $value";
			}
			else {
				$sql = $sql . " AND $key = $value";
			}
			$i++;
		}
	}

	return $sql;
}

// Запрос на получение данных с одной таблицы
function selectAll($table, $params = []) {
	global $pdo;

	$sql = "SELECT * FROM $table";

	// Обработка параметров (при наличии)
	$sql = checkParameters($sql, $params);

	$query = $pdo->prepare($sql);
	$query->execute();

	checkError($query);

	return $query->fetchAll();
}

// Запрос на получение одной строки с выбранной таблицы
function selectOne($table, $params = []) {
	global $pdo;

	$sql = "SELECT * FROM $table";

	// Обработка параметров (при наличии)
	$sql = checkParameters($sql, $params);

	$sql = $sql . " LIMIT 1";

	$query = $pdo->prepare($sql);
	$query->execute();

	checkError($query);

	return $query->fetch();
}

function insert($table, $params) {
	global $pdo;

	//$sql = "INSERT INTO $table (admin, username, email, password) VALUES (:adm, :usr, :mail, :password)";

	$coll = '';
	$mask = '';
	$i = 0;
	foreach ($params as $key => $value) {
		if($i == 0) {
			$coll = $coll . $key;
			$mask = $mask . "'$value'";
		}
		else {
			$coll = $coll . ", $key";
			$mask = $mask . ", '$value'";
		}

		$i++;
	}

	$sql = "INSERT INTO $table ($coll) VALUES ($mask)";


	$query = $pdo->prepare($sql);
	$query->execute($params);

	checkError($query);
	return $pdo->lastInsertId();
}

function update($table, $params, $id) {
	global $pdo;

	$str = '';
	$i = 0;
	foreach ($params as $key => $value) {
		if ($i === 0)
			$str = $str . "$key = '$value'";
		else
			$str = $str . ", $key = '$value'";
		$i++;
	}

	$sql = "UPDATE $table SET $str WHERE id = $id";

	$query = $pdo->prepare($sql);
	$query->execute($params);

	checkError($query);
}

function delete($table, $id) {
	global $pdo;

	$sql = "DELETE FROM $table WHERE id = $id";

	$query = $pdo->prepare($sql);
	$query->execute();

	checkError($query);
}




