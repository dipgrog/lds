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
         
        <!-- <div class="lside">&nbsp</div> -->
        <div id="content">
            <div id="title">
                <h2>Контрагенты</h2>
                <!-- <h3>Учет по клиентам (в основном по кассам)</h3> -->
            </div>
            <div class="row40">
                <div class="col-2-4">
                    <a href="?page=clientedit&id=new"><dip class="btn pos">Добавить</dip></a>
                
                
                <form  action="" method="GET" >
                    <!-- <input class="btn pos" type="submit" name="page" value="client" text="Поиск"> -->
                    
                    <input class="search" type="text" name="search" placeholder="Введите строку поиска">
                    <button class="btn" type="submit" name="page" value="client">Поиск</button>
                    <div class="text-v-middle"><?php echo $messsage; ?></div>
       
                </form>
                </div>
            </div>

           
            <!-- <div class="pad"></div> -->

            <div class="tabl">

                <table>
                    <tr>
                        <th id="fst">№</th>
                        <th>Контрагент</th>
                        <th>Адрес/Телефон</th>
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


                    $query .= "ORDER BY  opf, shortname";

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
                            echo "<div class='fill'>";
                            echo "$shortname $opf";
                            echo "</div>";
                            echo "</a>";
                            echo "</td>";
                            if ($adress){$adress .="<br>";}
                            echo "<td>$adress$telephone</td>";
                            if ($inn){
                                $inn = 'ИНН: '.$inn;
                            }
                            if ($kpp){
                                $cut='<br>';
                                $kpp = 'КПП: '.$kpp;
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