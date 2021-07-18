<?php

require "db.php";
$name = $_GET["name"];
$phone_number = $_GET["ph"];
$dob = $_GET["dob"];
$bloodgroup =  $_GET["bloodgroup"];
$height = $_GET["height"];
$weight = $_GET["weight"];
$place = $_GET["place"];
$hospital = $_GET["hospital"];

$sql = "INSERT INTO tbl_donors (id, name, hospital, blood_group, dob, phone_number) VALUES (NULL , '$name', '$hospital','$bloodgroup','$dob','$phone_number' );";


$statement = $db->prepare($sql);
$statement->execute();

header("location: index.php");

?>