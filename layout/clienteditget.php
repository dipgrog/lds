<?php 

Db_connect();
			if (isset($_GET['clid'])) {
				$clid = $_GET['clid'];
			}
 			$page_title = '';
 			$shortname = '';
 			$name =  '';
 			$opf = '';
 			$inn = '';
 			$kpp = '';
 			$adress = '';
 			$telephone = '';
 			$director = '';
 			$contract = '';
 			$master = '';
 ?>
 <?php 
 if (isset($_POST['submit'])){

 	$shortname = $_POST['shortname'];
 	$name = $_POST['name'];
 	$opf = $_POST['opf'];
 	$inn = $_POST['inn'];
 	$kpp = $_POST['kpp'];
 	$adress = $_POST['adress'];
 	$telephone = $_POST['telephone'];
 	$director = $_POST['director'];
 	$contract = $_POST['contract'];
 	$master = $_POST['master'];

        // if ($name !='') {
        //     // INSERT INTO `status` (`id`, `name`) VALUES (NULL, 'asdfasdf');
        //     $name = mysqli_real_escape_string($mysqli, $name);

 	if ($_GET['clid'] == 'new'){

 		$query  = "INSERT INTO client (shortname, clname, opf, inn, kpp, adress, telephone, director, contract, master) ";
 		$query .= " VALUES (";
 		$query .= "'$shortname', ";
 		$query .= "'$name', ";
 		$query .= "'$opf', ";
 		$query .= "'$inn', ";
 		$query .= "'$kpp', ";
 		$query .= "'$adress', ";
 		$query .= "'$telephone', ";
 		$query .= "'$director', ";
 		$query .= "'$contract', ";
 		$query .= "'$master'";
 		$query .= ")";

 	}else{

 		$id = $_GET['clid'];
 		$query  = "UPDATE client SET ";
 		$query .= "shortname='$shortname', ";
 		$query .= "clname='$name', ";
 		$query .= "opf='$opf', ";
 		$query .= "inn='$inn', ";
 		$query .= "kpp='$kpp', ";
 		$query .= "adress='$adress', ";
 		$query .= "telephone='$telephone', ";
 		$query .= "director='$director', ";
 		$query .= "contract='$contract', ";
 		$query .= "master='$master' ";
 		$query .= "WHERE clid=$clid";

 	}
 	

 	
            // echo $query;
 	$result = mysqli_query($mysqli, $query);

 	if (!$result) {
 		$message  = 'Неверный запрос: ' . mysql_error() . "\n";
 		$message .= 'Запрос целиком: ' . $query;
 		die($message);

 	}

 	header('Location: ?page=client');
 }

 ?>

 <?php 
 if (isset($_GET['page'])){
 	$page = $_GET['page'];

 	if ($page == 'clientedit'){
 		$clid = $_GET['clid'];

 		if ($clid == 'new'){
 			$page_title = 'Добавление контрагента';
 			$shortname = '';
 			$name =  '';
 			$opf = '';
 			$inn = '';
 			$kpp = '';
 			$adress = '';
 			$telephone = '';
 			$director = '';
 			$contract = '';
 			$master = '';

 		}else{

 			$query = "SELECT * FROM client WHERE clid = $clid";
 			if ($stmt = $mysqli->prepare($query)){
 				$stmt->execute();
 				$stmt->bind_result($idclient,$name,$shortname,$inn,$kpp,$adress,$telephone,$director,$contract,$master,$opf);
 				$stmt->fetch();

 				$page_title = "Редактирование $opf $shortname";
 				$stmt->close();
 			}
 			$mysqli->close();
 		}

 	}elseif ($page == 'clienttech'){
 	
 		$clid = $_GET['clid'];
 		$query = "SELECT clname, shortname, opf FROM client WHERE clid = $clid";
 			if ($stmt = $mysqli->prepare($query)){
 				$stmt->execute();
 				$stmt->bind_result($name, $shortname, $opf);
 				$stmt->fetch();

 				// $page_title = "Техника $opf $shortname";
 				$stmt->close();
 			}
 			$mysqli->close();
 		}
 }

 ?>


 <?php 
 $backlink = '?page=journal';

 if (isset($_SERVER['HTTP_REFERER'])){
 	$backlink = $_SERVER['HTTP_REFERER'];
 }
 ?>


