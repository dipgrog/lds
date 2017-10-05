<?php  
$sn ='test';

if (isset($_SERVER['HTTP_REFERER'])){
	$back = $_SERVER['HTTP_REFERER'];
}

include ('components/db_connection.php');

if (isset($_POST['submit_unit'])) {
	$clid = $_POST['clid'];
	$type = $_POST['type'];
	$model = $_POST['model'];
	$sn = $_POST['sn'];
	$name = $type.' '.$model;




$query = "INSERT INTO units (name, sn, client) VALUES ('$name', '$sn', $clid)";
$result = mysqli_query($mysqli, $query);
        if (!$result) {
            $message  = 'Неверный запрос: ' . mysqli_error() . "\n";
            $message .= 'Запрос целиком: ' . $query;
            die($message);
        }
}
// header("Location: $back");

?>











<div class="container">

	<!-- <div class="lside">&nbsp</div> -->
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

		<?php include ('layout/toolbar_client_unit.php') ?>




		<div class="row">
			<div class="col-8-8">
				<table>

<!-- 					<tr>
						<th class="table-td-num">№</th>
						<th>Техника</th>
						<th class="table-td-client">SN</th>
					</tr> -->

					<tr>
						<th class="fst">№</th>
						
						<th class="fst">С</th>
						<th class="fst">В</th>
						<th>Техника</th>
						<th>SN</th>
						<th>Сумма</th>

					</tr>

				<?php  
					include ('components/db_connection.php');


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
								echo "<tr>";
								echo "<td class='table-td-num text-h-center'>{$i}</td>";
								echo "<td class='ion-person sbf text-h-center out'></td>";
								echo "<td class='text-h-center'><input type='checkbox' checked name=''></td>";
								echo "<td>$name</td>";
								echo "<td class='table-td-client'><div class='fill'>$sn</div></td>";
								echo "<td class='summ-pay text-h-center'>1340 р.</td>";
								echo "</tr>";
							}
							$stmt->close();
						}
						$mysqli->close();
					}

					?>

				</table>

			</div>


		</div>

	</div>
</div>

