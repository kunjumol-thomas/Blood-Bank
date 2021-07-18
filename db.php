<?php
$username = "root";
$passwd = "";
$db_name = "test_bloodbank";
$dsn = 'mysql:host=localhost;dbname=' . $db_name . '';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$db = new PDO($dsn, $username, $passwd, $options);

?>