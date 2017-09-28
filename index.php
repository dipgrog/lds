
<?php 
if (isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 'journal';
}
include('components/db_connection.php');
include ('layout/header.php');
// echo "<div class='container'>";


// include ('layout/sidebar.php');


include("layout/$page.php");
include('layout/footer.php');
// echo "</div>";
?>