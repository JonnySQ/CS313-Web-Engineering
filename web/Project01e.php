<?php
session_start();

//Soda name
//popularity
//sugar
//caffeine
//flavor 1
//flavor 2
//brand
//company

include("testdatabase.php");

$soda = $_POST["soda"];
$popularity = $_POST["popularity"];
$sugar = $_POST["sugar"];
$caffeine = $_POST["caffeine"];
$flavor1 = $_POST["flavor1"];
$flavor2 = $_POST["flavor2"];
$brand = $_POST["brand"];
$company = $_POST["company"];
$go = 1;

if ($soda == "") {
	$go = 0;
	}
if ($popularity == "" || $popularity == 0) {
	$go = 0;
	}
if ($sugar == "") {
	$go = 0;
	}
if ($caffeine == "") {
	$go = 0;
	}
if ($flavor1 == "" || $flavor1 == 1) {
	$go = 0;
	}
if ($brand == "" || $brand == 0) {
	$go = 0;
	}
if ($company == "" || $company == 0) {
	$go = 0;
	}
if ($go == 0) {
	$_SESSION["Pass"] = "0";
	$resultPage = "/Project01c.php";
	header('Location: '.$resultPage);
	}
if ($go == 1) {	
	$info = "'{$soda}', $popularity, $sugar, $caffeine, $flavor1, $flavor2, $brand, $company";
	$query = "INSERT INTO soda (soda_name, soda_popularity, soda_sugar, soda_caffeine, flavor1_id, flavor2_id, brand_id, company_id) VALUES ($info);";
	
	$statement = $db->prepare($query);
	$statement->execute();
	
	
	$_SESSION["Pass"] = "1";
	$resultPage = "/Project01c.php";
	header('Location: '.$resultPage);
	
	}
?>

