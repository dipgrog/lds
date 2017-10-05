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


		<div class="addclient">
			<table>
				<tr>
					<th class="table-td-num">№</th>
					<th class="table-td-object">Техника</th>
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
							echo "<td class='table-td-object'>$name</td>";
							echo "<td class='table-td-client'><div class='fill'>$sn</div></td>";
                            // if ($adress){$adress .="<br>";}
                            // echo "<td>$adress$telephone</td>";
                            // if ($inn){
                            //     $inn = 'ИНН: '.$inn;
                            // }
                            // if ($kpp){
                            //     $cut='<br>';
                            //     $kpp = 'КПП: '.$kpp;
                            // }
                            // echo "<td>$inn$cut$kpp</td>";


							echo "</tr>";
							}
						$stmt->close();
						}
						$mysqli->close();
					}

					?>
					
				</table>


<!-- 				<div class="row">
					<div class="col-8-8">
						<table>
							<tr>
								<th class="fst">№</th>

								<th class="fst">С</th>
								<th class="fst">В</th>
								<th>Техника</th>
								<th>SN</th>
								<th>Сумма</th>

							</tr>

							<tr>
								<td class="text-h-center">1</td>

								<td class="ion-person sbf text-h-center out" ></td>
								<td class="text-h-center"><input type="checkbox" checked="true" name=""></td>
								<td>Картридж HP 1010</td>
								<td>823874827374</td>
								<td class="summ-pay text-h-center">1340 р.</td>
							</tr>
							
							<tr>
								<td class="text-h-center">2</td>

								<td class="ion-checkmark-circled sbf text-h-center good"></td>
								<td class="text-h-center"><input type="checkbox" checked="true" name=""></td>
								<td>Картридж HP 1010</td>
								<td>823874827374</td>
								<td class="summ-pay text-h-center">1340 р.</td>
							</tr>

							<tr>
								<td class="text-h-center">3</td>

								<td class="ion-settings sbf text-h-center wip"></td>
								<td class="text-h-center"><input type="checkbox" checked="true" name=""></td>
								<td>Картридж HP 1010</td>
								<td>823874827374</td>
								<td class="summ-pay text-h-center">1340 р.</td>
							</tr>
							
							<tr>
								<td class="text-h-center">4</td>
			
								<td class="ion-close-circled sbf text-h-center bad"></td>
								<td class="text-h-center"><input type="checkbox" checked="true" name=""></td>
								<td>Картридж HP 1010</td>
								<td>823874827374</td>
								<td class="summ-pay text-h-center">1340 р.</td>
							</tr>

						</table>

					</div> -->
				</div>

			</div>


			



		</form>
	</div>
</div>


