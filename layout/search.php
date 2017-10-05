<?php 
    $search = '';
    $messsage = '';
    if (isset($_GET['search'])){
        $search = $_GET['search'];
        if ($search !=''){   
            $messsage = "Вы искали: $search";
        }
    }
 ?>

	<div class="col-1-8 rr">
		<form  action="" method="GET" >
		<button hidden="true" type="submit" name="page" value="client">Поиск</button>
	</div>
	
	<div class="col-2-8 rr">
			<input class="inputfield" type="text" name="search" placeholder="Введите строку поиска">
	</div>

		</form>
