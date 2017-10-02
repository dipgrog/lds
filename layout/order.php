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

				<div class="row">
					<div class="col-8-8">
						<table>
							<tr>
								<th class="fst">№</th>
								<!-- <th class="fst"></th> -->
								<th class="fst">С</th>
								<th class="fst">В</th>
								<th>Техника</th>
								<th>SN</th>
								<th>Сумма</th>
								<!-- <th>Место</th> -->

							</tr>

							<tr>
								<td class="text-h-center">1</td>
								<!-- <td class="ion-edit btn-edit text-h-center"></td> -->
								<td class="ion-person sbf text-h-center out" ></td>
								<td class="text-h-center"><input type="checkbox" checked="true" name=""></td>
								<td>Картридж HP 1010</td>
								<td>823874827374</td>
								<td class="summ-pay text-h-center">1340 р.</td>
							</tr>
							
							<tr>
								<td class="text-h-center">2</td>
								<!-- <td class="ion-edit btn-edit text-h-center"></td> -->
								<td class="ion-checkmark-circled sbf text-h-center good"></td>
								<td class="text-h-center"><input type="checkbox" checked="true" name=""></td>
								<td>Картридж HP 1010</td>
								<td>823874827374</td>
								<td class="summ-pay text-h-center">1340 р.</td>
							</tr>

							<tr>
								<td class="text-h-center">3</td>
								<!-- <td class="ion-edit btn-edit text-h-center"></td> -->
								<td class="ion-settings sbf text-h-center wip"></td>
								<td class="text-h-center"><input type="checkbox" checked="true" name=""></td>
								<td>Картридж HP 1010</td>
								<td>823874827374</td>
								<td class="summ-pay text-h-center">1340 р.</td>
							</tr>
							
							<tr>
								<td class="text-h-center">4</td>
								<!-- <td class="ion-edit btn-edit text-h-center"></td> -->
								<td class="ion-close-circled sbf text-h-center bad"></td>
								<td class="text-h-center"><input type="checkbox" checked="true" name=""></td>
								<td>Картридж HP 1010</td>
								<td>823874827374</td>
								<td class="summ-pay text-h-center">1340 р.</td>
							</tr>
														

							

						</table>

					</div>


				</div>

		</div>

				
			



			</form>
		</div>
	</div>
</div>
