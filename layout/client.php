<?php 
    $search = '';
    $messsage = '';
    if (isset($_GET['search'])){
        $search = $_GET['search'];
        if ($search !=''){   
            $messsage = "Результат поиска: $search";
        }
    }
 ?>

    <div class="container">
         <?php include ('sidebar.php') ?>
        <div class="lside">&nbsp</div>
        <div id="content">
            <div id="title">
                <h1>Контрагенты</h1>
                <!-- <h3>Учет по клиентам (в основном по кассам)</h3> -->
            </div>
            <div class="navbar">
                <div class="navblock">
                    <a href="?page=clientedit&id=new"><dip class="btn pos">Добавить</dip></a>
                </div>
                <div class="navblock">
                
                <form class="formright" action="" method="GET" >
                    <div class="text-v-middle"><?php echo $messsage; ?></div>
                    <!-- <input class="btn pos" type="submit" name="page" value="client" text="Поиск"> -->
                    
                    <button class="btn al-right" type="submit" name="page" value="client">Поиск</button>
                    <input class="inputfield" type="text" name="search" placeholder="Введите строку поиска">
       
                </form>
                </div>
            </div>

           
            <div class="pad"></div>

            <div class="tabl">

                <table>
                    <tr>
                        <th id="fst">№</th>
                        <th>Контрагент</th>
                        <th>Телефон</th>
                        <th>Адрес</th>
                        <th>ИНН/КПП</th>
                        <th>Директор</th>
                        <th>Договор</th>
                        <th>Мастер</th>
                    </tr>

                    <?php
                    $query  = "SELECT * FROM client ";
                    $query .= "WHERE ";

                    $query .= "shortname ";
                    $query .= "LIKE '%$search%' ";
                   
                    $query .= " OR ";
                    $query .= "name ";
                    $query .= "LIKE '%$search%' ";
                    
                    $query .= " OR ";
                    $query .= "adress ";
                    $query .= "LIKE '%$search%' ";

                    $query .= " OR ";
                    $query .= "telephone ";
                    $query .= "LIKE '%$search%' ";

                    $query .= " OR ";
                    $query .= "director ";
                    $query .= "LIKE '%$search%' ";

                    $query .= " OR ";
                    $query .= "opf ";
                    $query .= "LIKE '%$search%' ";

                    $query .= " OR ";
                    $query .= "inn ";
                    $query .= "LIKE '%$search%' ";

                    $query .= " OR ";
                    $query .= "kpp ";
                    $query .= "LIKE '%$search%' ";

                    $query .= " OR ";
                    $query .= "contract ";
                    $query .= "LIKE '%$search%' ";

                    $query .= " OR ";
                    $query .= "master ";
                    $query .= "LIKE '%$search%' ";


                    $query .= "ORDER BY opf, shortname";

                    if ($stmt = $mysqli->prepare($query)){
                        $stmt->execute();
                        $stmt->bind_result($id,$name,$shortname,$inn,$kpp,$adress,$telephone,$director,$contract,$master,$opf);
                        $i=0;
                        
                        while ($stmt->fetch()){
                            $i++;
                            $cut='';
                            echo "<tr>";
                            echo "<td id='fst'>{$i}</td>";
                            echo "<td>";
                            echo "<a href='?page=clientedit&id=$id'>";
                            echo "$opf $shortname";
                            echo "</a>";
                            echo "</td>";
                            echo "<td>$telephone</td>";
                            echo "<td>$adress</td>";
                            
                            if ($kpp){
                                $cut='/';
                            }
                            echo "<td>$inn$cut$kpp</td>";
                            
                            echo "<td>$director</td>";
                            echo "<td>$contract</td>";
                            echo "<td>$master</td>";
                            echo "</tr>";
                        }}?>
                    


                </table>
            </div>
        </div>
    </div>