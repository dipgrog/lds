

	<div class="col-1-8">

		<?php  
		include ('components/db_connection.php');
		?>
		<form action="?page=clienttech&clid= <?php echo $clid; ?> " method="POST" >	
		<?php
		$query = "SELECT name FROM type ORDER BY name";
		if ($stmt = $mysqli->prepare($query)){
			$stmt->execute();
			$stmt->bind_result($name);
			echo "<input required id='type' list='typelist' name='type' class='inputfield pos' placeholder='Тип устройства'>";
			echo "<datalist id='typelist'>";

			while ($stmt->fetch()){
				echo "<option value='$name'>$name</option>";
			}
			echo "</datalist>";
			$stmt->close();
		}
		$mysqli->close();
		?>
	</div>

	<div class="col-1-8">

		<?php  
		include ('components/db_connection.php');
		?>
		<?php
		$query = "SELECT name FROM model ORDER BY name";
		if ($stmt = $mysqli->prepare($query)){
			$stmt->execute();
			$stmt->bind_result($name);
			echo "<input required id='model' list='modellist' name='model' class='inputfield pos' placeholder='Модель'>";
			echo "<datalist id='modellist'>";

			while ($stmt->fetch()){
				echo "<option value='$name'>$name</option>";
			}
			echo "</datalist>";
			$stmt->close();
		}
		$mysqli->close();
		?>
	</div>



	<div class="col-1-8">
		<input required id='sn' name='sn' class='inputfield pos' placeholder='Серийный номер'>
		<input type="hidden" name="clid" value="<?php echo($clid);?>">
	</div>

	<div class="col-1-8">
		<button name='submit_unit' type="submit" >Добавить</button>
		<!-- <input id='sn' name='sn' class='inputfield pos' placeholder='Серийный номер'> -->
	</div>





