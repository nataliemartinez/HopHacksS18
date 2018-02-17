<?php

function connect() {
	$path = "./db_login.txt";
	$file = fopen($path, "r");
	fscanf($file, "%s %s %s %s", $server, $username, $password, $database);
	fclose($file);
	$conn = mysqli_connect($server, $username, $password, $database);
	if (!conn) {
		die("Connection failed");
		return -1;
	}
	return $conn;
}

function run_query($query, $result_mode=MYSQLI_STORE_RESULT) {
	$conn = connect();
	$value = mysqli_query($conn, $query, $result_mode);
	mysqli_close($conn);
	return $result;
}

function store_login($username, $password) {
	$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
	run_query($query);
}

function username_exists($username) {
	$query = "SELECT COUNT(username) FROM users WHERE username='$username'";
	$result = run_query($query);
	$row = mysqli_fetch_array($result, MYSQLI_NUM);
	return ($row[0] > 0);
}

function get_id($username) {
	$query = "SELECT id FROM users WHERE username='$username";
	$result = run_query($query);
	$row = mysqli_fetch_assoc($result);
	return $row['id'];
}

function store_measurements($measurements, $user_id) {
	$query = "INSERT INTO measurements (user_ID, height, shoulder, chest, waist, hips, inseam) VALUES ('$user_id";
	foreach ($measurements as $key => $val) {
		$query .= "'" . $val . "',";
	}
	$query = substr($query, 0, -1);
	$query .= ")";
	echo $query;
	die();
	run_query($query);
}


?>