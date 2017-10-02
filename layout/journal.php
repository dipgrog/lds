
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
                        <th></th>
                        <th class="table-td-4">Дата/Статус</th>
                        <th>Контрагент</th>
                        <th class="table-td-6">Техника</th>
                        <th>Неисправность</th>
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
                            echo "<td class='fst'>{$i}</td>";
                            echo "<td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>";
     /* статус */           echo "<td  class='table-td-6'>

                            
                            <div>$date $status</div>
                            

                            </td>";
                            echo "<td>$client <br>(85594) 2-35-78</td>";

                            // echo "<td>";
                            // echo "<table class='table-simple'>";
                            // echo   "<tr>";
                            echo        "<td>$object</td>";
                            // echo    "</tr>";
                            // echo   "<tr>";
                            // echo        "<td>$object</td>";
                            // // echo    "</tr>";
                            // echo "</table>";
                            echo "<td>Заправка</td>";
                           
                       
                            echo "<td class='text-h-center'><span class='summ-pay'>500 р.</span></td>";
                            echo "<td class='text-h-center'>$master</td>";
                            echo "<td class='text-h-center'>$place</td>";
                            echo "</tr>";
                        }}?>
                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>

                            <tr>
                            <td class='fst'>#</td>
                            <td class='text-h-center'><a href='?page=order_edit&id=12' class='ion-android-menu sbf'></a></td>
                            <td  class='table-td-6'>
                            <div>$date $status</div>
                            </td>                        
                            <td>$client <br>(85594) 2-35-78</td>
                            <td>$object</td>                        
                            <td>Заправка</td>                    
                            <td class='text-h-center'><span class='summ-pay'>500 р.</span></td>
                            <td class='text-h-center'>$master</td>
                            <td class='text-h-center'>$place</td>
                            </tr>


                </table>
            </div>


        </div>

        
    </div>
