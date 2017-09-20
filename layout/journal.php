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
        <?php include ('sidebar.php') ?>
        <div class="lside">&nbsp</div>
        <div id="content">
            <div id="title">
                <h1>Журнал учета выполненных работ</h1>
            </div>
            <div class="navbar">
                <div class="navblock">
                    <a href="?target=status">
                     <div  class="btn pos">Добавить</div>
                    </a>
                <select class="departselect">
                    <option>Все отделы</option>
                    <option>ККТ</option>
                    <option>КМТ</option>
                    <option>ВТ</option>
                </select>
                </div>
                <div class="navblock">
                <form action="" method="POST" >
                    <input class="inputfield" type="text" name="name" placeholder="Введите строку поиска">
                    <input class="btn pos" type="submit" name="submit" value="Поиск">
                </form>
                </div>
            </div>
            <div class="pad">&nbsp</div>
            <div class="tabl">
                <table>
                    <tr>
                        <th id="fst">№</th>
                        <th>Статус</th>
                        <th>Оборудование</th>
                        <th>Сумма</th>
                        <th>Контрагент</th>
                        <th>Мастер</th>
                        <th id="lst">Место</th>
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
     /* статус */           echo "<td class='status new'><div>Новый</div><div class='date'>01.02.2017</div></td>";
                            echo "<td>Копир Canon 118MF</td>";
                            echo "<td>250 р.</td>";
                           
                            echo "<td>ООО Контрагент<div class='date'>(85594) 2-35-78</div></td>";
                       
                            echo "<td> Сорокин Е.Ю.</td>";
                            echo "<td  id='lst'>10</td>";
                            // echo "<td></td>";
                            echo "</tr>";
                        }}?>
                </table>
            </div>
        </div>
    </div>