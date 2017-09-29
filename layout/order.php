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
								<th class="fst"></th>
								<th>Техника</th>
								<th>Работы/ЗиП</th>
								<th>Сумма</th>
								<th>Место</th>
								<th></th>

							</tr>

							<tr>
								<td class="text-h-center">1</td>
								<td class="ion-checkmark-circled sbf text-h-center yes"></td>
								<td>Картридж HP 1010</td>
								<td>
									
									<table class="table-simple">
										<tr>
											<td class="table-td-150">Заправка</td>
											<td class="table-td-50">1 шт.</td>
											<td class="table-td-50">250 р.</td>
											<td class="table-td-50">250 р.</td>
											<td class="table-td-50">
												<input type="checkbox" checked="true" name="">
											</td>
										</tr>
										<tr>
											<td>Тонер HP 1010</td>
											<td>1 шт.</td>
											<td>90 р.</td>
											<td>90 р.</td>
											<td class="table-td-50">
												<input type="checkbox" checked="true" name="">
											</td>
										</tr>
										<tr>
											<td>Замена фотобарабана</td>
											<td>1 шт.</td>
											<td>50 р.</td>
											<td>50 р.</td>
											<td class="table-td-50">
												<input type="checkbox" checked="true" name="">
											</td>
										</tr>
										<tr>
											<td>Фотобарабан HP 1010</td>
											<td>1 шт.</td>
											<td>310 р.</td>
											<td>310 р.</td>
											<td class="table-td-50">
												<input type="checkbox" checked="true" name="">
											</td>
										</tr>

									</table>



								</td>
								<td class="summ-pay text-h-center"><?php echo 250+90+50+310 .' р.'; ?></td>
								<td class="text-h-center">5</td>
								<td class="ion-edit btn-edit"></td>
							</tr>
							<tr>
								<td class="text-h-center">2</td>
								<td class="ion-close-circled sbf text-h-center no"></td>
								<td>Картридж ML 1210</td>
								<td>
									<table class="table-simple">
										<tr>
											<td class="table-td-150">Поврежден корпус, ремонту не подлежит.</td>
											<td class="table-td-50">1 шт.</td>
											<td class="table-td-50">0 р.</td>
											<td class="table-td-50">0 р.</td>
											<td class="table-td-50">
												<input type="checkbox" unchecked name="">
											</td>
										</tr>
									</table>

								</td>
								<td>0 р.</td>
								<td class="text-h-center">5</td>
								<td class="ion-edit btn-edit"></td>
							</tr>
							<tr>
								<td class="text-h-center">3</td>
								<td class="ion-help-circled sbf text-h-center maybe"></td>
								<td>Картридж XRX 1560</td>
								<td>
									<table class="table-simple">
										<tr>
											<td class="table-td-150">Заправка не требуется.</td>
											<td class="table-td-50">1 шт.</td>
											<td class="table-td-50">0 р.</td>
											<td class="table-td-50">0 р.</td>
											<td class="table-td-50">
												<input type="checkbox" unchecked name="">
											</td>
										</tr>
									</table>

								</td>
								<td>0 р.</td>
								<td class="text-h-center">5</td>
								<td class="ion-edit btn-edit"></td>
							</tr>

						</table>

					</div>


				</div>

		</div>

				
			



			</form>
		</div>
	</div>
</div>
