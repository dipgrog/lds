<?php 
$title = 'Новый заказ';
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
		<div class="row">
			<div class="col-1-8">

				<a href="<?php echo $backlink; ?>"><dip class="btn pos">Назад</dip></a>
			</div>

		</div>
		<div class="addclient">

			<form action="" method="POST" class="client-form">

				
					<div class="row-auto">
					<div class="col-3-8">
						<label for="client">Контрагент</label><br>
					</div>
				</div>
				
				<div class="row30">
					<div class="col-3-8">
						<?php  
						include ('components/db_connection.php');
						$query = "SELECT shortname, telephone FROM client ORDER BY name";
						if ($stmt = $mysqli->prepare($query)){
							$stmt->execute();
							$stmt->bind_result($shortname, $telephone);
							echo "<input list='clients' name='client' class='inputfield pos' placeholder='Организация или Ф.И.О.'>";
							echo "<datalist id='clients'>";
							echo "<option value='$shortname'>";
							echo "$shortname $telephone";
							echo "</option>";

							while ($stmt->fetch()){
								echo "<option value='$shortname'>";
								echo "$shortname $telephone";
								echo "</option>";
							}
							echo "</datalist>";
							$stmt->close();
						}
						$mysqli->close();
						?>
					</div>
					
					<div class="col-1-8">
						<a href="?page=clientedit&id=new"><dip class="btn pos">Новый</dip></a>
					</div>

				</div>
		</div>


				<div class="row">
					<div class="col-2-8">	
						
						<label for="master">Техника</label>

						<?php  
						include ('components/db_connection.php');
						$query = "SELECT object FROM journal ORDER BY object";
						if ($stmt = $mysqli->prepare($query)){
							$stmt->execute();
							$stmt->bind_result($object);
							echo "<input list='objects' name='object' class='inputfield'>";
							echo "<datalist id='objects'>";
							echo "<option value='$object'>";
							echo "$object";
							echo "</option>";

							while ($stmt->fetch()){
								echo "<option value='$object'>";
								echo "$object";
								echo "</option>";
							}
							echo "</datalist>";
							$stmt->close();
						}
						$mysqli->close();
						?>
						<!-- <input id="master" type="text" name="master" placeholder="Ф.И.О. мастера" value=""> -->

					</div>

				

					<div class="col-2-8">
						<label for="shortname">Описание неисправности</label>
						<input class="inputfield" type="text" name="reason" placeholder="Причина обращения" value="">
					</div>

				</div>
				<div class="row">
					<div class="col-2-8">	
						
						<?php  
						include ('components/db_connection.php');
						$query = "SELECT object FROM journal ORDER BY object";
						if ($stmt = $mysqli->prepare($query)){
							$stmt->execute();
							$stmt->bind_result($object);
							echo "<input list='objects' name='object' class='inputfield'>";
							echo "<datalist id='objects'>";
							echo "<option value='$object'>";
							echo "$object";
							echo "</option>";

							while ($stmt->fetch()){
								echo "<option value='$object'>";
								echo "$object";
								echo "</option>";
							}
							echo "</datalist>";
							$stmt->close();
						}
						$mysqli->close();
						?>
						<!-- <input id="master" type="text" name="master" placeholder="Ф.И.О. мастера" value=""> -->

					</div>

				

					<div class="col-2-8">

						<input class="inputfield" type="text" name="reason" placeholder="Причина обращения" value="">
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
