
<?php 
if (isset($_GET['target'])){
    $target = $_GET['target'];
    switch ( $target) {
        case 'status':
        $nm = 'Статус заявки';
        $a1 = 'sel';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = '';

        break;

        case 'type':
        $nm = 'Тип устройства';
        $a1 = '';
        $a2 = 'sel';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = '';

        break;

        case 'opf':
        $nm = 'Организационно правовая форма';
        $a1 = '';
        $a2 = '';
        $a3 = 'sel';
        $a4 = '';
        $a5 = '';
        $a6 = '';

        break;

        case 'prof':
        $nm = 'Наименование должности';
        $a1 = '';
        $a2 = '';
        $a3 = '';
        $a4 = 'sel';
        $a5 = '';
        $a6 = '';

        break;

        case 'depart':
        $nm = 'Наименование отдела';
        $a1 = '';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = 'sel';
        $a6 = '';

        break;

        case 'work':
        $nm = 'Вид работ';
        $a1 = '';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = 'sel';

        break;
       
        default:
        $target = 'status';
        $nm = 'Статус заявки';
        $a1 = 'sel';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = '';
        break;
    }

}else{
        $nm = 'Статус заявки';
        $target = 'status';
        $a1 = 'sel';
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
         
        <?php include ('../layout/sidebar.php') ?>
        <div class="lside">&nbsp</div>
        <div id="content">
            <div id="title">
                <h1>Настройки справочников</h1>
            </div>
            <div class="navbar">
                <ul class="navul">
                    <a href="?target=status"><li class="btn <?php echo $a1 ?> ">Статусы</li></a>
                    <a href="?target=type"><li class="btn <?php echo $a2 ?>">Типы</li></a>
                    
                    <a href="?target=opf"><li class="btn <?php echo $a3 ?>">ОПФ</li></a>
                    <a href="?target=prof"><li class="btn <?php echo $a4 ?>">Должности</li></a>
                    <a href="?target=depart"><li class="btn <?php echo $a5 ?>">Отделы</li></a>
                    <a href="?target=work"><li class="btn <?php echo $a6 ?>">Работы</li></a>
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
                    $query = "SELECT * FROM {$target}";
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