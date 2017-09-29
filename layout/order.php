<?php 
$title = 'Новый заказ';
$backlink = '?page=journal';

if (isset($_SERVER['HTTP_REFERER'])){
	$backlink = $_SERVER['HTTP_REFERER'];
}




?>




<div class="container">

	<!-- <div class="lside">&nbsp</div> -->
	<div id="content">
	
		<div class="row40">
			<div class="col-4-8">

				<a href="?page=journal"><dip class="btn">Назад</dip></a>
				<span class="devider">&nbsp</span>
				<a href="?page=clientedit&id=new"><dip class="btn">Новый контрагент</dip></a>
				
			</div>
					

		</div>
		<div class="addclient">

			<form action="" method="POST" class="client-form">

				
					<div class="row30">
					<div class="col-3-8">
						<label for="client">Контрагент</label><br>
					</div>
				</div>
				
				<div class="row">
					<div class="col-2-8">
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
					<div class="col-2-4">
						<input class="btn pos" type="submit" name="submit" value="Выбрать технику контрагента"><br>
					</div>

				</div>
		</div>

				
			



			</form>
		</div>
	</div>
</div>
