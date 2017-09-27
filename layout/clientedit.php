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

 	if ($_GET['id'] == 'new'){

 		$query  = "INSERT INTO client (shortname, name, opf, inn, kpp, adress, telephone, director, contract, master) ";
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

 		$id = $_GET['id'];
 		$query  = "UPDATE client SET ";
 		$query .= "shortname='$shortname', ";
 		$query .= "name='$name', ";
 		$query .= "opf='$opf', ";
 		$query .= "inn='$inn', ";
 		$query .= "kpp='$kpp', ";
 		$query .= "adress='$adress', ";
 		$query .= "telephone='$telephone', ";
 		$query .= "director='$director', ";
 		$query .= "contract='$contract', ";
 		$query .= "master='$master' ";
 		$query .= "WHERE id=$id";

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
 		$id = $_GET['id'];

 		if ($id == 'new'){
 			$title = 'Добавление контрагента';
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

 			$query = "SELECT * FROM client WHERE id = $id";
 			if ($stmt = $mysqli->prepare($query)){
 				$stmt->execute();
 				$stmt->bind_result($idclient,$name,$shortname,$inn,$kpp,$adress,$telephone,$director,$contract,$master,$opf);
 				$stmt->fetch();

 				$title = "Редактирование $opf $shortname";
 				$stmt->close();
 			}
 			$mysqli->close();
 		}

 	}
 }

 ?>


 <?php 
$backlink = '?page=journal';

if (isset($_SERVER['HTTP_REFERER'])){
	$backlink = $_SERVER['HTTP_REFERER'];
}
  ?>

 <div class="container">
 	
 	<div class="lside">&nbsp</div>
 	<div id="content">
 		<div id="title">
 			<h2> <?php echo $title ?> </h2>
 			<!-- <h3>Учет по клиентам (в основном по кассам)</h3> -->
 		</div>
 		<div class="row30">
 			<div class="col-1-4">
 				<a href="<?php echo $backlink; ?>"><dip class="btn pos">Назад</dip></a>
 			</div>
 		</div>
 		<div class="addclient">

 			<form action="" method="POST" class="client-form">
 				
 				<div class="row">
 					<div class="col-1-4">
 						<label for="opf">Организационно правовая форма</label><br>

 						<?php  
 						include ('components/db_connection.php');
 						$query = "SELECT * FROM opf ORDER BY name";
 						if ($stmt = $mysqli->prepare($query)){
 							$stmt->execute();
 							$stmt->bind_result($idopf, $nameopf);
 							echo "<select class='list-dropdown' name='opf'>";
 							echo "<option>";
 							echo $opf;
 							echo "</option>";

 							while ($stmt->fetch()){
 								echo "<option value='$nameopf'>";
 								echo $nameopf;
 								echo "</option>";
 							}
 							echo "</select>";
 							$stmt->close();
 						}
 						$mysqli->close();
 						?>

 					</div>
 				
 					<div class="col-1-8">	
 						<label for="contract">Договор</label>
 						<input class="inputfield" id="contract" type="text" name="contract" placeholder="№ договора" value="<?php echo $contract ?>">
 					</div>

 					<div class="col-1-8">	
 						<label for="master">Мастер</label>

 						<?php  
 						include ('components/db_connection.php');
 						$query = "SELECT * FROM master ORDER BY name";
 						if ($stmt2 = $mysqli->prepare($query)){
 							$stmt2->execute();
 							$stmt2->bind_result($id2, $name2, $depart2);
 							echo "<select class='list-dropdown' name='master'>";
 							echo "<option>";
 							echo $master;
 							echo "</option>";

 							while ($stmt2->fetch()){
 								echo "<option value='$name2'>";
 								echo $name2;
 								echo "</option>";
 							}
 							echo "</select>";
 							$stmt2->close();
 						}
 						$mysqli->close();
 						?>
 						<!-- <input id="master" type="text" name="master" placeholder="Ф.И.О. мастера" value=""> -->
 						
 					</div>
 				
 			</div>




 				<div class="row">

 					<div class="col-2-8">
 						<label for="shortname">Краткое название</label>
 						<input class="inputfield" id="shortname" type="text" name="shortname" placeholder="Наименование или Ф.И.О." value="<?php echo $shortname ?>">
 					</div>
 					
 					<div class="col-1-8">	
 						<label for="inn">ИНН</label><br>
 						<input class="inputfield" id="inn" type="text" name="inn" placeholder="ИНН" value="<?php echo $inn ?>">			
 					</div>
 					<div class="col-1-8">			
 						<label for="inn">КПП</label><br>
 						<input class="inputfield" id="inn" type="text" name="kpp" placeholder="КПП" value="<?php echo $kpp ?>">
 					</div>

 					

 				</div>

 				<div class="row">
 					<div class="col-3-8">
 						<label for="name">Полное название организации</label>
 						<input class="inputfield" id="name" type="text" name="name" placeholder="Полное наименование" value="<?php echo $name ?>">
 					</div>

 					<div class="col-1-8">
 						<label for="director">Директор</label>
 						<input class="inputfield" id="director" type="text" name="director" placeholder="Ф.И.О. Директора" value="<?php echo $director ?>">
 					</div>

 				</div>



				<div class="row">
					<div class="col-2-8">
 						<label for="adress">Адрес</label>
 						<input class="inputfield" id="adress" type="text" name="adress" placeholder="Адрес" value="<?php echo $adress ?>"><br>
 					</div>
 					

 					<div class="col-1-4">
 						<label for="telephone">Телефон</label>
 						<input class="inputfield" pattern="(\d{3,5}\)\d{1,3}\-\d{1,3}\-\d{1,3}" id="telephone" type="text" name="telephone" placeholder="Телефон" value="<?php echo $telephone ?>">
 					</div>

 				</div>

 				<div class="row">
 					<div class="col-2-4">
 						<input class="btn pos" type="submit" name="submit" value="Записать"><br>
 					</div>
 				</div>

 			</form>
 		</div>
 	</div>
 </div>
 