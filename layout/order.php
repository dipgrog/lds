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
			<?php include ('layout/toolbar_order_new.php'); ?>
		</div>


		<div class="row">
			
			<div class="col-3-8">
				<div class="row">
					<div class="col-5-8">

						<?php  
						include ('components/db_connection.php');
						?>
						<form action="" method="POST" class="client-form">	
							<?php
							$query = "SELECT id, shortname, telephone FROM client ORDER BY name";
							if ($stmt = $mysqli->prepare($query)){
								$stmt->execute();
								$stmt->bind_result($id, $shortname, $telephone);
								echo "<input id='client' list='clients' name='client' class='inputfield pos' placeholder='Организация или Ф.И.О.'>";
								echo "<datalist id='clients'>";

								while ($stmt->fetch()){
									echo "<option data-value='$id' value='$shortname'>$shortname $telephone</option>";
								}
								echo "</datalist>";
								$stmt->close();
							}
							$mysqli->close();
							?>
					</div>
					<div class="col-3-8">
						<input class="btn pos" type="submit" name="submit-client" value="Выбрать">
					</div>	

				</div>


			</div>



			<div class="col-3-8">
				<table>
					<tr>
						<th class="table-td-num">№</th>
						<th>Техника</th>
						<th class="table-td-client">SN</th>
					</tr>

					<?php  
					include ('components/db_connection.php');


					if (isset($_POST['submit-client'])) {
						$client = $_POST['client'];
						echo "$client";
						$query = "SELECT * FROM units WHERE client = '{$client}'";

						if ($stmt = $mysqli->prepare($query)){
							$stmt->execute();
							$stmt->bind_result($id,$name,$sn,$client);
							$i=0;

							while ($stmt->fetch()){
								$i++;
								$cut='';
								echo "<tr>";
								echo "<td class='table-td-num text-h-center'>{$i}</td>";
								echo "<td>$name</td>";
								echo "<td class='table-td-client'><div class='fill'>$sn</div></td>";
								echo "</tr>";
							}
							$stmt->close();
						}
						$mysqli->close();
					}

					?>
					
				</table>
			</div>



			<div class="col-3-8">

			</div>

		</div>

		







			

			</div>


			



		</form>
	</div>
</div>


