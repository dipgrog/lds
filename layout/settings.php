
<?php 
if (isset($_GET['target'])){
    $target = $_GET['target'];
    switch ( $target) {
        case 'status':
        $nm = 'Статус заявки';
        $pholder ='Введите наименование';
        $b1 = 'sel';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = '';
        $b7 = '';
        $b8 = '';
        $b9 = '';
        break;

        case 'type':
        $nm = 'Тип устройства';
        $pholder ='Введите наименование';
        $b1 = '';
        $b2 = 'sel';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = '';
        $b7 = '';
        $b8 = '';
        $b9 = '';
        break;

        case 'opf':
        $nm = 'Организационно правовая форма';
        $pholder ='Введите наименование';
        $b1 = '';
        $b2 = '';
        $b3 = 'sel';
        $b4 = '';
        $b5 = '';
        $b6 = '';
        $b7 = '';
        $b8 = '';
        $b9 = '';
        break;

        case 'prof':
        $nm = 'Наименование должности';
        $pholder ='Введите наименование';
        $b1 = '';
        $b2 = '';
        $b3 = '';
        $b4 = 'sel';
        $b5 = '';
        $b6 = '';
        $b7 = '';
        $b8 = '';
        $b9 = '';
        break;

        case 'depart':
        $nm = 'Наименование отдела';
        $pholder ='Введите наименование';
        $b1 = '';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = 'sel';
        $b6 = '';
        $b7 = '';
        $b8 = '';
        $b9 = '';
        break;

        case 'work':
        $nm = 'Вид работ';
        $pholder ='Введите наименование';
        $b1 = '';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = 'sel';
        $b7 = '';
        $b8 = '';
        $b9 = '';
        break;

        case 'master':
        $nm = 'Сотрудник';
        $pholder ='Введите фамилию и инициалы';
        $b1 = '';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = '';
        $b7 = 'sel';
        $b8 = '';
        $b9 = '';

        break;
        case 'zip':
        $nm = 'Номенклатура';
        $pholder ='Введите наименование';
        $b1 = '';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = '';
        $b7 = '';
        $b8 = 'sel';
        $b9 = '';

        break;

        case 'model':
        $nm = 'Модели техники';
        $pholder ='Введите наименование';
        $b1 = '';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = '';
        $b7 = '';
        $b8 = '';
        $b9 = 'sel';

        break;

        default:
        $target = 'status';
        $nm = 'Статус заявки';
        $pholder ='Введите наименование';
        $b1 = 'sel';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = '';
        $b7 = '';
        $b8 = '';
        $b9 = '';
        break;
    }

}else{
    $nm = 'Статус заявки';
    $target = 'status';
    $pholder ='Введите наименование';
    $b1 = 'sel';
    $b2 = '';
    $b3 = '';
    $b4 = '';
    $b5 = '';
    $b6 = '';
    $b7 = '';
    $b8 = '';
    $b9 = '';
}

?>


<?php 
if (isset($_POST['submit'])){

    $name = $_POST['name'];

    if ($name !='') {
            // INSERT INTO `status` (`id`, `name`) VALUES (NULL, 'asdfasdf');
        $name = mysqli_real_escape_string($mysqli, $name);
        $query = "INSERT INTO $target (name) VALUES ('$name')";
        if ($target == 'master'){
            $depart = $_POST['depart'];
            $query = "INSERT INTO $target (name, depart) VALUES ('$name', '$depart')";    
        }
        $result = mysqli_query($mysqli, $query);
        if (!$result) {
            $message  = 'Неверный запрос: ' . mysql_error() . "\n";
            $message .= 'Запрос целиком: ' . $query;
            die($message);
        }
    }
}



?>

<div class="container">


    <?php if(isset($_GET['page'])){$page = $_GET['page'];} ?>
    <!-- <div class="lside">&nbsp</div> -->
    <div id="content">
        <div class="row">
            <div class="col-1-8">
            <ul class="settings-link-list">
                <li>
            <a href="?page=<?php echo $page ?>&target=status" class="btn <?php echo $b1 ?> ">Статусы</a>
                    
                </li>
                  <li>
            <a href="?page=<?php echo $page?>&target=type" class="btn <?php echo $b2 ?>">Типы техники</a>
                </li>
                 <li>
            <a href="?page=<?php echo $page?>&target=model" class="btn <?php echo $b9 ?>">Модели техники</a>
                </li>

                  <li>
            <a href="?page=<?php echo $page?>&target=opf" class="btn <?php echo $b3 ?>">ОПФ</a>
                    
                </li>
                  <li>
            <a href="?page=<?php echo $page?>&target=prof" class="btn <?php echo $b4 ?>">Должности</a>
                    
                </li>
                  <li>
            <a href="?page=<?php echo $page?>&target=depart" class="btn <?php echo $b5 ?>">Отделы</a>
                    
                </li>
                  <li>
            <a href="?page=<?php echo $page?>&target=master" class="btn <?php echo $b7 ?>">Сотрудники</a>
                    
                </li>
                  <li>
            <a href="?page=<?php echo $page?>&target=work" class="btn <?php echo $b6 ?>">Работы</a>
                    
                </li>
                  <li>
            <a href="?page=<?php echo $page?>&target=zip" class="btn <?php echo $b8 ?>">Расходники</a>
                    
                </li>
                
            
            </ul>
            </div>
        
        <div class="col-6-8">

        <div class="row40">
                        <form action="" method="POST" >


                        <div class="col-4-8">
                            <input class="inputfield" type="text" name="name" placeholder=" <?php echo $pholder; ?>">
                        </div>

                        <div class="col-2-8">
                            <?php include ('components/db_connection.php');

                            if ($target == 'master'){
                            $query = "SELECT * FROM depart ORDER BY name";
                            if ($stmt = $mysqli->prepare($query)){
                                $stmt->execute();
                                $stmt->bind_result($id, $name);
                                echo "<select class='list-dropdown' name='depart'>";
                                echo "<option>";
                                echo "";
                                echo "</option>";
                                while ($stmt->fetch()){
                                    echo "<option value='$id'>";
                                    echo $name;
                                    echo "</option>";
                                }
                                echo "</select>";
                                }
                            }
                            ?>
                        </div>

                        <div class="col-1-8">
                            <input class="btn pos" type="submit" name="submit" value="Добавить">
                        </div>

                        </form>
            </div>


<!--     <div class="pad"></div> -->



    <div class="row">

    <div class="col-8-8">

        <table>

            <?php

            if ($target !== 'master'){

                $query = "SELECT * FROM {$target} ORDER BY name";
                if ($stmt = $mysqli->prepare($query)){
                    $stmt->execute();
                    $stmt->bind_result($id,$name);
                    $i=0;
                    echo "<tr>";
                    echo "<th id='fst'>№</th>";
                    echo "<th>$nm</th>";
                    echo "<th>Действие</th>";
                    echo "</tr>";

                    while ($stmt->fetch()){
                        $i++;
                        echo "<tr>";
                        echo "<td id='fst'>{$i}</td>";
                        echo "<td>{$name}</td>";
                        echo "<td id='edit'><a href='?page={$page}&target={$target}&edit={$id}'>изменить</a></td>";
                        echo "</tr>";
                    }

                }

            } elseif ($target == 'master') {
               $query = "SELECT * FROM master, depart WHERE master.depart = depart.id ORDER BY master.name";
                    // $query = "SELECT * FROM {$target} ORDER BY name";
               if ($stmt = $mysqli->prepare($query)){
                $stmt->execute();
                $stmt->bind_result($id,$name,$depart,$id_d,$name_d);
                $i=0;
                echo "<tr>";
                echo "<th id='fst'>№</th>";
                echo "<th>$nm</th>";
                echo "<th>Отдел</th>";
                echo "<th>Действие</th>";
                echo "</tr>";

                while ($stmt->fetch()){
                    $i++;
                    echo "<tr>";
                    echo "<td id='fst'>{$i}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$name_d}</td>";
                    echo "<td id='edit'>Изменить</td>";
                    echo "<tr>";
                }

            } 

        }


        ?>


    </table>
</div>
</div>

</div>
</div>
</div>
</div>