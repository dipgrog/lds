

<div class="col-1-8">
	<a href="<?php echo $backlink;?>"><div class="btn ">Назад</div></a>
</div>


	<div class="col-4-8">

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
	<div class="col-1-8">
		<input class="btn pos" type="submit" name="submit-client" value="Выбрать">
	</div>
	<div class="col-2-8">
		<a href="<?php echo $add_link;?>"><div class="btn">Новый контрагент</div></a>
	</div>

