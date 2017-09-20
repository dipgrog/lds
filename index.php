<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Учет ремонта оборудования</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
</head>
<body>
<?php 
if (isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 'home';
}
include('components/db_connection.php');

include("layout/$page.php");
include('layout/footer.php');
?>