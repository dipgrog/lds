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
<div class="row40">
	<div class="col-4-4">
		<a href="<?php echo $add_link;?>"><dip class="btn pos">Добавить</dip></a>


		<form  action="" method="GET" >
			<!-- <input class="btn pos" type="submit" name="page" value="client" text="Поиск"> -->

			<input class="search" type="text" name="search" placeholder="Введите строку поиска">
			<button class="btn" type="submit" name="page" value="client">Поиск</button>
			<div class="text-v-middle"><?php echo $messsage; ?></div>

		</form>
	</div>
</div>