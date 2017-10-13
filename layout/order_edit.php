<?php 
$title = 'Новый заказ';
$backlink = '?page=journal';


?>




<div class="container">

	<!-- <div class="lside">&nbsp</div> -->
	<div id="content">
	
	<div class="row40"> 
           <?php include ('layout/toolbar_order_edit.php') ?>
           
    </div>
					

		</div>
		<div class="addclient">

			<form action="" method="POST" class="client-form">

				<div class="row">
					<div class="col-8-8">
						<table>


							<tr>
								<th class='table-td-num'>№</th>
								<th class='table-td-num'></th>
								<th class='table-td-object text-h-left'>Техника</th>
								<th class='text-h-left'>Работы/ЗиП</th>
								<th class='table-td-pay text-h-left'>Сумма</th>
								<th class='table-td-num'>Место</th>
								<th></th>

							</tr>

							<?php 
							if (isset($_GET['id'])) {
								$id_j = $_GET['id'];
							}


							$query = "SELECT name, id_unit, id_repair, id_journal, place, status_unit FROM units AS un, (SELECT * FROM units_repair WHERE id_journal = $id_j) AS rep WHERE un.id = rep.id_unit ";

                    	if ($stmt = $mysqli->prepare($query)){
                        $stmt->execute();
                        $stmt->bind_result($name, $id_unit, $id_repair, $id_journal, $place, $status_unit);
                        $i=0;
                        
                        while ($stmt->fetch()){
                            $i++;
                            
                            echo "<tr>";

                            echo "<td class='table-td-num text-h-center'>";
                            	echo "$i";
                            echo "</td>";

							echo "<td class='table-td-num'>";
                            	echo "$status_unit";
                            echo "</td>";

							echo "<td>";
                            	echo "$name";
                            echo "</td>";

							echo "<td>";
                            	echo "Работы";
                            echo "</td>";

							echo "<td class='table-td-summ'>";
                            	echo "Сумма";
                            echo "</td>";

							echo "<td>";
                            	echo "Место";
                            echo "</td>";

							echo "<td>";
                            	echo " ";
                            echo "</td>";

               
                            echo "</tr>";
                            
                        }}?>

							
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td><div class="text-h-right">Итого:</div></td>
								<td class="text-h-left summ-pay">700 р.</td>
								<td colspan="2"><a href="<?php echo $add_link;?>"><div class="btn primary mm">Оформить</div></a></td>
								
							</tr>

						</table>

					</div>


				</div>

		</div>

				
			



			</form>
		</div>
	</div>
</div>
