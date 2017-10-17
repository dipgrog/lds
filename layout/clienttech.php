
<?php  
$sn ='test';

if (isset($_SERVER['HTTP_REFERER'])){
	$back = $_SERVER['HTTP_REFERER'];
}


if (isset($_POST['submit_unit'])) {
	$clid = $_POST['clid'];
	$type = $_POST['type'];
	$model = $_POST['model'];
	$sn = $_POST['sn'];
	$name = $type.' '.$model;



	Db_connect();

	$query = "INSERT INTO units (name, sn, client) VALUES ('$name', '$sn', $clid)";
	$result = mysqli_query($mysqli, $query);
	if (!$result) {
		$message  = 'Неверный запрос: ' . mysqli_error() . "\n";
		$message .= 'Запрос целиком: ' . $query;
		die($message);
	}
}
// header("Location: $back");


if (isset($_POST['new_order'])) {
	$clid = $_POST['new_order'];
	$data = date("Y-m-d"); 
	$summ = 0.0;
	$master = '';
	$place = '';
	$reason = '';
	// Запись в журналеDb_connect();


	// Запиь выбранной техники в таблицу Техника на ремонте

	if (isset($_POST['unit'])) {
		Db_connect();
		$unit = $_POST['unit'];


		$query = "SELECT name FROM units WHERE id = $unit[0]";
		// $result = mysqli_query($mysqli, $query);

		if ($stmt = $mysqli->prepare($query)){
			$stmt->execute();
			$stmt->bind_result($uname);


			while ($stmt->fetch()){
				$unit_name = $uname;
			}

			
				$stmt->close();
			
			$mysqli->close();


			Db_connect();
			// Запись в журнале заказов
			$query = "INSERT INTO journal (client, data, status, object) VALUES ('$shortname', '$data', 'Новый', '$unit_name')";
			$result = mysqli_query($mysqli, $query);

			if (!$result) {
				$message  = 'Неверный запрос: ' . mysqli_error($mysqli) . "\n";
				$message .= 'Запрос целиком: ' . $query;
				die($message);
			}

			$id_journal = $mysqli->insert_id;

			// Записи в журнале ремонта
			foreach ($unit as $key => $value) {
			$query = "INSERT INTO units_repair (id_journal, id_unit) VALUES ($id_journal, $value)";
			$result = mysqli_query($mysqli, $query);

			if (!$result) {
				$message  = 'Неверный запрос: ' . mysqli_error($mysqli) . "\n";
				$message .= 'Запрос целиком: ' . $query;
				die($message);
			}
			}


		}
		header('Location: ?page=journal');
	}
}
?>

	<div class="container">

		<div id="content">



				<div class="row40">

					<div class="col-1-8">
						<a href="?page=client"><div class="btn pos">Назад</div></a>
					</div>

					<div class="col-7-8">

						<a href="?page=clientedit&clid=<?php echo $clid; ?>" class="btn">Реквизиты</a>

						<a href="" class="btn sel">Техника</a>

						<a href="" class="btn">Раcсчеты</a>

					</div>

				</div>

				<?php include ('layout/toolbar_client_unit.php'); ?>

				<div class="row-auto">

					<div class="col-8-8">

						<form action="" method="POST">
						<table>
							<thead>
								<tr>
									<th class="table-td-num">№</th>

									<th class="table-td-num">С</th>
									<th class="table-td-num">В</th>
									<th class='table-td-object'>Техника</th>
									<th class="table-td-100">SN</th>
									<th class="table-td-100">Сумма</th>
									<th> </th>
								</tr>
							</thead>
							<tbody>
								<?php  
								Db_connect();
								if (isset($_GET['clid'])) {
									
									$clid = $_GET['clid'];
									$query = "SELECT * FROM units WHERE client = $clid";

									if ($stmt = $mysqli->prepare($query)){
										$stmt->execute();
										$stmt->bind_result($id,$name,$sn,$client);
										$i=0;

										while ($stmt->fetch()){
											$i++;
											$cut='';
											echo "<tr>\n";
											echo "<td class='table-td-num text-h-center'>{$i}</td>\n";
											echo "<td class='table-td-num ion-person sbf text-h-center out'></td>\n";
											echo "<td class='text-h-center'><input type='checkbox' unchecked disabled name='unit[]' value='$id'></td>\n";
											echo "<td class='table-td-object'>$name</td>\n";
											echo "<td class='table-td-100'><div class='fill'>$sn</div></td>\n";
											echo "<td class='summ-pay text-h-center'>1340 р.</td>\n";
											echo "<td ></td>\n";
											echo "</tr>";
										}
										$stmt->close();
									}
									$mysqli->close();
								}

								?>
							</tbody>

						</table>

					</div>
				</div>

				<div class="row-auto-pad">
					<button type="submit" name="new_order" value="<?php echo($clid);?>">Добавить выделенную технику в новый заказ</button>
				</div>
			</form>
		</div>
	</div>