<?php
include('config.php');
$db = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($db->connect_error) {
	die("Connect failed" . $db->connect_errno);
}