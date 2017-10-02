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
		<div class="col-1-8">
		<a href="<?php echo $add_link;?>"><div class="btn primary">Добавить</div></a>
	</div>
	<div class="col-2-8">


		<form  action="" method="GET" >
			<!-- <input class="btn pos" type="submit" name="page" value="client" text="Поиск"> -->

			<input class="inputfield" type="text" name="search" placeholder="Введите строку поиска">


	</div>
		<div class="col-1-8">
			<button  type="submit" name="page" value="client">Поиск</button>
		</div>
		<div class="col-2-8">
			<div class="text-v-middle"><?php echo $messsage; ?></div>
		</div>
		</form>
</div>