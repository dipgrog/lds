
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

        
            <div class="row40"> 
            <?php 
            // include ('layout/toolbar.php');
            include ('layout/search.php');
            ?>
           </div>

       

            <table>
                    <tr>
                        <th class="table-td-num">№</th>
                        <th class="ion-edit table-td-status"></th>
                        <th class="table-td-date">Дата/Статус</th>
                        <th class="table-td-client">Контрагент</th>
                        <!-- <th>Адрес/Телефон</th> -->
                        <!-- <th>ИНН/КПП</th> -->
                        <th class="table-td-object">Техника</th>
                        <th class="table-td-reason">Неисправность</th>
                        <th class="text-h-center table-td-payment">Сумма</th>
                        <th class="table-td-master">Мастер</th>
                        <th class="table-td-place">Место</th>
                    </tr>
            </table>
            <div class="tabl">
                <table>
                    <!-- <tr>
                        <th id="fst">№</th>
                        <th></th>
                        <th class="table-td-4">Дата/Статус</th>
                        <th>Контрагент</th>
                        <th class="table-td-6">Техника</th>
                        <th>Неисправность</th>
                        <th>Сумма</th>
                        <th>Мастер</th>
                        <th id="lst">Место</th>
                    </tr> -->

                    <?php
                    $query = "SELECT * FROM journal";
                    if ($stmt = $mysqli->prepare($query)){
                        $stmt->execute();
                        $stmt->bind_result($id,$client,$object,$reason,$date,$depart,$master,$summa,$place,$status);
                        $i=0;
                        while ($stmt->fetch()){
                            $i++;
                            echo "<tr>";
                            echo "<td class='table-td-num text-h-center'>{$i}</td>";
                            echo "<td class='table-td-status text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>";
     /* статус */           echo "<td  class='table-td-date'><div>$date $status</div></td>";
                            echo "<td class='table-td-client'>$client</td>";

                            // echo "<td>";
                            // echo "<table class='table-simple'>";
                            // echo   "<tr>";
                            echo        "<td class='table-td-object'>$object</td>";
                            // echo    "</tr>";
                            // echo   "<tr>";
                            // echo        "<td>$object</td>";
                            // // echo    "</tr>";
                            // echo "</table>";
                            echo "<td class='table-td-reason'>Заправка</td>";
                           
                       
                            echo "<td class='text-h-center table-td-payment'><span class='summ-pay'>500 р.</span></td>";
                            echo "<td class='table-td-master'>$master</td>";
                            echo "<td class='text-h-center table-td-place'>$place</td>";
                            echo "</tr>";
                        }}?>
                            


                </table>
            </div>


        </div>

        
    </div>
