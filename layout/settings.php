
<?php 
if (isset($_GET['target'])){
    $target = $_GET['target'];
    switch ( $target) {
        case 'status':
        $nm = 'Статус заявки';
        $b1 = 'sel';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = '';

        break;

        case 'type':
        $nm = 'Тип устройства';
        $b1 = '';
        $b2 = 'sel';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = '';

        break;

        case 'opf':
        $nm = 'Организационно правовая форма';
        $b1 = '';
        $b2 = '';
        $b3 = 'sel';
        $b4 = '';
        $b5 = '';
        $b6 = '';

        break;

        case 'prof':
        $nm = 'Наименование должности';
        $b1 = '';
        $b2 = '';
        $b3 = '';
        $b4 = 'sel';
        $b5 = '';
        $b6 = '';

        break;

        case 'depart':
        $nm = 'Наименование отдела';
        $b1 = '';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = 'sel';
        $b6 = '';

        break;

        case 'work':
        $nm = 'Вид работ';
        $b1 = '';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = 'sel';

        break;
       
        default:
        $target = 'status';
        $nm = 'Статус заявки';
        $b1 = 'sel';
        $b2 = '';
        $b3 = '';
        $b4 = '';
        $b5 = '';
        $b6 = '';
        break;
    }

}else{
        $nm = 'Статус заявки';
        $target = 'status';
        $b1 = 'sel';
    }

?>


<?php 
    if (isset($_POST['submit'])){

        $name = $_POST['name'];

        if ($name !='') {
            // INSERT INTO `status` (`id`, `name`) VALUES (NULL, 'asdfasdf');
            $name = mysqli_real_escape_string($mysqli, $name);

            $query = "INSERT INTO $target (name) VALUES ('$name')";
            $result = mysqli_query($mysqli, $query);
            if (!$result) {
                $message  = 'Неверный запрос: ' . mysql_error() . "\n";
                $message .= 'Запрос целиком: ' . $query;
                die($message);
            }
          }
        }
    


 ?>

    <div id="wrapper">
         
        <?php include ('sidebar.php') ?>
        <div class="lside">&nbsp</div>
        <div id="content">
            <div id="title">
                <h1>Настройки справочников</h1>
            </div>
            <div class="navbar">
                <ul class="navul">
                    <a href="?page=<?php echo $_GET['page']?>&target=status"><li class="btn <?php echo $b1 ?> ">Статусы</li></a>
                    <a href="?page=<?php echo $_GET['page']?>&target=type"><li class="btn <?php echo $b2 ?>">Типы</li></a>
                    <a href="?page=<?php echo $_GET['page']?>&target=opf"><li class="btn <?php echo $b3 ?>">ОПФ</li></a>
                    <a href="?page=<?php echo $_GET['page']?>&target=prof"><li class="btn <?php echo $b4 ?>">Должности</li></a>
                    <a href="?page=<?php echo $_GET['page']?>&target=depart"><li class="btn <?php echo $b5 ?>">Отделы</li></a>
                    <a href="?page=<?php echo $_GET['page']?>&target=work"><li class="btn <?php echo $b6 ?>">Работы</li></a>
                </ul>
            </div>

            <form action="" method="POST" class="myform">
                <input class="inputfield" type="text" name="name" placeholder="Введите наименование">
                <input class="btn pos" type="submit" name="submit" value="Добавить">
            </form>


            <div class="pad"></div>
            <div class="tabl">

                <table>
                    <tr>
                        <th id="fst">№</th>
                        <th> <?php echo $nm; ?> </th>
                        <th>Действие</th>

                    </tr>

                    <?php
                    $query = "SELECT * FROM {$target} ORDER BY name";
                    if ($stmt = $mysqli->prepare($query)){
                        $stmt->execute();
                        $stmt->bind_result($id,$name);
                        $i=0;
                        while ($stmt->fetch()){
                            $i++;
                            echo "<tr>";
                            echo "<td id='fst'>{$i}</td>";
                            echo "<td>{$name}</td>";
                            echo "<td id='edit'><a href='?edit&id={$id}'>изменить</a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>


                </table>
            </div>
        </div>
    </div>