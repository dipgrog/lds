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
	
<!-- 		<div class="row40">
			<div class="col-4-8">

				
				<span class="devider">&nbsp</span>
				<a href="?page=clientedit&id=new"><dip class="btn">Новый контрагент</dip></a>
				
			</div>
					

		</div> -->
		<div class="addclient">

			<form action="" method="POST" class="client-form">

				
					<div class="row30">
					<div class="col-3-8">
						<label for="client">Контрагент</label><br>
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
								<td class="ion-checkmark-circled sbf text-h-center good"></td>
								<td>Картридж HP 1010</td>
								<td>
									
									<table class="table-simple">
										
										<tr>
											<td class="table-td-num">1</td>
											<td class="table-td-work">Заправка</td>
											<td class="table-td-count">1 шт.</td>
											<td class="table-td-price">250 р.</td>
											<td class="table-td-summ">250 р.</td>
											<td class="table-td-check">
												<input type="checkbox" checked="true" name="">
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Тонер HP 1010</td>
											<td>1 шт.</td>
											<td>90 р.</td>
											<td>90 р.</td>
											<td>
												<input type="checkbox" checked="true" name="">
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Замена фотобарабана</td>
											<td>1 шт.</td>
											<td>50 р.</td>
											<td>50 р.</td>
											<td>
												<input type="checkbox" checked="true" name="">
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Фотобарабан HP 1010</td>
											<td>1 шт.</td>
											<td>310 р.</td>
											<td>310 р.</td>
											<td>
												<input type="checkbox" checked="true" name="">
											</td>
										</tr>
									</table>
											<!-- <div class="inputfield">&nbsp</div> -->


								</td>
								<td class="summ-pay text-h-center"><?php echo 250+90+50+310 .' р.'; ?></td>
								<td class="text-h-center">5</td>
								<td class="ion-edit btn-edit"></td>
							</tr>
							<tr>
								<td class="text-h-center">2</td>
								<td class="ion-close-circled sbf text-h-center bad"></td>
								<td>Картридж ML 1210</td>
								<td>
									<table class="table-simple">
										<tr>
											<td class="table-td-num">1</td>
											<td class="table-td-work">Поврежден корпус, ремонту не подлежит.</td>
											<td class="table-td-count">1 шт.</td>
											<td class="table-td-price">0 р.</td>
											<td class="table-td-summ">0 р.</td>
											<td class="table-td-check">
												<input type="checkbox" unchecked name="">
											</td>
										</tr>
									</table>
									<!-- <div class="inputfield">&nbsp</div> -->
								</td>
								<td>0 р.</td>
								<td class="text-h-center">5</td>
								<td class="ion-edit btn-edit"></td>
							</tr>
							<tr>
								<td class="text-h-center">3</td>
								<td class="ion-checkmark-circled sbf text-h-center good"></td>
								<td>Картридж XRX 1560</td>
								<td>
									<table class="table-simple">
										<tr>
											<td class="table-td-num">1</td>
											<td class="table-td-work">Заправка не требуется.</td>
											<td class="table-td-count">1 шт.</td>
											<td class="table-td-price">0 р.</td>
											<td class="table-td-summ">0 р.</td>
											<td class="table-td-check">
												<input type="checkbox" unchecked name="">
											</td>
										</tr>
									</table>
									<!-- <div class="inputfield">&nbsp</div> -->
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
