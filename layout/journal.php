
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


 <?php  $messsage = ''; ?>
    <div class="container">
        
        <!-- <div class="lside">&nbsp</div> -->
        <div id="content">
            <!--             <div class="navbar">
                <div class="navblock">
                    <a href="?page=order">
                     <div  class="btn pos">Добавить</div>
                    </a>
                </div>
                <div class="navblock">




                <form class="formright" action="" method="POST" >
                    <input class="btn pos" type="submit" name="submit" value="Поиск">
                    <input class="inputfield" type="text" name="name" placeholder="Введите строку поиска">
                </form>
                </div>
            </div> -->

        
            <?php include ('layout/search.php') ?>

       

            <div class="tabl">

                <table>
                    <tr>
                        <th id="fst">№</th>
                        <th class="table-td-4">Дата/Статус</th>
                        <th>Контрагент</th>
                        <th class="table-td-6">Техника</th>
                        <th>Работы</th>
                        <th>Сумма</th>
                        <th>Мастер</th>
                        <th id="lst">Место</th>
                    </tr>
                    <?php
                    $query = "SELECT * FROM journal";
                    if ($stmt = $mysqli->prepare($query)){
                        $stmt->execute();
                        $stmt->bind_result($id,$client,$object,$reason,$date,$depart,$master,$summa,$place,$status);
                        $i=0;
                        while ($stmt->fetch()){
                            $i++;
                            echo "<tr>";
                            echo "<td id='fst'>{$i}</td>";
     /* статус */           echo "<td  class='table-td-6'>

                            
                            <div>$date $status</div>
                            

                            </td>";
                            echo "<td>$client <br>(85594) 2-35-78</td>";

                            echo "<td>$object</td>";

                            echo "<td>
                            <span>Заправка 1010 - $summa р.</span><br>
                            <span>Заправка 1210 - $summa р.</span>

                            </td>";
                           
                       
                            echo "<td class='text-h-center'><span class='summ-pay'>500 р.</span></td>";
                            echo "<td class='text-h-center'>$master</td>";
                            echo "<td class='text-h-center'>$place</td>";
                            // echo "<td></td>";
                            echo "</tr>";
                        }}?>
                </table>
            </div>


        </div>

        
    </div>
