

 <div class="container">
 	
 	<!-- <div class="lside">&nbsp</div> -->
 	<div id="content">
 		
 		<div class="row40">
 			<div class="col-1-8">
 				<a href="<?php echo $backlink; ?>"><div class="btn pos">Назад</div></a>
 			</div>
		<div class="col-7-8">
 				<a href="?page=clientedit&clid=<?php echo $clid; ?>" class="btn sel">Реквизиты</a>
 		
 				<a href="?page=clienttech&clid=<?php echo $clid; ?>" class="btn">Техника</a>
 		
 				<a href="<?php echo $backlink; ?>" class="btn">Раcсчеты</a>
 			</div>



 		</div>

 		<div class="addclient"> <!-- START addclient-->

 			<form action="" method="POST" class="client-form">
 				
 				<div class="row"> <!--****************** BIG ROW ********************-->

 					<div class="col-2-8">  <!--1111111111111111 START 1111111111111111 -->
 						<div class="row-title">
 							<label for="opf">Организационно правовая форма</label>
 						</div>
 						<div class="row-fill"> 
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

 					</div> <!--111111111111111  END 111111111111111*-->


 					<div class="col-1-8">	
 						<div class="row-title">
 							<label for="inn">ИНН</label>
 						</div>
 						<div class="row-fill">
 							<input class="inputfield" id="inn" type="text" name="inn" placeholder="ИНН" value="<?php echo $inn ?>">
 						</div>
 					</div>

 					<div class="col-1-8">	
 						<div class="row-title">
 							<label for="inn">КПП</label>
 						</div>
 						<div class="row-fill">
 							<input class="inputfield" id="inn" type="text" name="kpp" placeholder="КПП" value="<?php echo $kpp ?>">
 						</div>
 					</div>


 					<div class="col-1-8"> <!-- 22222222222 START 22222222222222 -->
 						<div class="row-title">
 							<label for="contract">Договор ККТ</label>
 						</div>

 						<div class="row-fill">
 							<input class="inputfield" id="contract" type="text" name="contract" placeholder="№ договора" value="<?php echo $contract ?>">
 						</div>
 					</div> <!-- 22222222222 END 22222222222 -->


 					<div class="col-1-8"> <!-- 3333333333333333 START 3333333333333333 -->
 						<div class="row-title">
 							<label for="master">Мастер ККТ</label>
 						</div>
 						<div class="row-fill">
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
 						</div>
 					</div> <!-- 3333333333333333 END 3333333333333333 -->

 				</div> 


 				<div class="row"> <!--****************** BIG ROW ********************-->
 					<div class="col-2-8">	
 						<div class="row-title">
 							<label for="shortname">Краткое название</label>
 						</div>
 						<div class="row-fill">
 							<input class="inputfield" id="shortname" type="text" name="shortname" placeholder="Наименование или Ф.И.О." value="<?php echo $shortname ?>">
 						</div>
 					</div>
 					<div class="col-4-8">
 						<div class="row-title">
 							<label for="name">Полное название организации</label>
 						</div>
 						<div class="row-fill">
 							<input class="inputfield" id="name" type="text" name="name" placeholder="Полное наименование" value="<?php echo $name ?>">
 						</div>
 					</div>

 				</div> 

 				<!--****************** BIG ROW ********************-->
 				<!-- <div class="row"> 


 				</div> -->


 				<div class="row40"> <!--****************** BIG ROW ********************-->

 					<div class="col-3-8">
 						<div class="row-title">
 							<label for="adress">Адрес</label>
 						</div>
 						<div class="row-fill">
 							<input class="inputfield" id="adress" type="text" name="adress" placeholder="Адрес" value="<?php echo $adress ?>">	
 						</div>
 					</div>


 					<div class="col-2-8">
 						<div class="row-title">
 							<label for="telephone">Телефон</label>
 						</div>
 						<div class="row-fill">
 							<input class="inputfield" pattern="(\d{3,5}\)\d{1,3}\-\d{1,3}\-\d{1,3}" id="telephone" type="text" name="telephone" placeholder="Телефон" value="<?php echo $telephone ?>">
 						</div>
 					</div>

 					<div class="col-1-8">	
 						<div class="row-title">
 							<label for="director">Директор</label>
 						</div>
 						<div class="row-fill">
 							<input class="inputfield" id="director" type="text" name="director" placeholder="Ф.И.О. Директора" value="<?php echo $director ?>">
 						</div>
 					</div>
 				</div>


 				<div class="row">	<!--****************** BIG ROW ********************-->
 					<div class="col-2-4">
 						<div class="row-title">
 						</div>
 						<div class="row-fill">
 							<input class="btn pos" type="submit" name="submit" value="Записать">
 						</div>
 					</div>

 				</div>

 			</form>

 		</div> <!-- END addclient-->

 	</div>
 </div>

