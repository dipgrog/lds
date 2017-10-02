
<?php 
if (isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 'journal';
}
include_once('components/db_connection.php');

include_once ('layout/clienteditget.php');
include_once ('layout/header.php');
// echo "<div class='container'>";


// include ('layout/sidebar.php');


include_once("layout/$page.php");
include_once('layout/footer.php');
// echo "</div>";
?>