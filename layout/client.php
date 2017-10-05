






    <div class="container">
         
        <!-- <div class="lside">&nbsp</div> -->
        <div id="content">
           <div class="row40"> 
           <?php include ('layout/toolbar_client.php') ?>
           <?php include ('layout/search.php') ?>
           </div>
           
            <!-- <div class="pad"></div> -->
            <table>
                    <tr>
                        <th class="table-td-num">№</th>
                        <th class="ion-edit table-td-status"></th>
                        <th class="table-td-client">Контрагент</th>
                        <!-- <th>Адрес/Телефон</th> -->
                        <!-- <th>ИНН/КПП</th> -->
                        <th class="table-td-director">Директор</th>
                        <th class="table-td-contract">Договор ККТ</th>
                        <th class="table-td-payment">Рассчеты</th>
                        <th class="table-td-master">Мастер ККТ</th>
                    </tr>
            </table>
            <div class="tabl">

                <table>
<!--                     <tr>
                        <th class="fst">№</th>
                        <th class="ion-edit"></th>
                        <th>Контрагент</th>
 
                        <th>Директор</th>
                        <th>Договор</th>
                        <th>Рассчеты</th>
                        <th>Мастер</th>
                    </tr>
 -->
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
                            echo "<td class='table-td-num text-h-center'>{$i}</td>";
                            echo "<td class='table-td-status text-h-center'><a href='?page=clientedit&clid=$id' class='ion-person sbf'></a></td>";
                            if ($opf == 'ФЛ'){
                                echo "<td class='table-td-client'><div class='fill'>$opf $shortname $telephone</div>";
                            }else{
                                echo "<td class='table-td-client'><div class='fill'>$opf $shortname</div>";
                            }

                       
                            echo "</td>";
                            // if ($adress){$adress .="<br>";}
                            // echo "<td>$adress$telephone</td>";
                            // if ($inn){
                            //     $inn = 'ИНН: '.$inn;
                            // }
                            // if ($kpp){
                            //     $cut='<br>';
                            //     $kpp = 'КПП: '.$kpp;
                            // }
                            // echo "<td>$inn$cut$kpp</td>";
                            
                            echo "<td class='table-td-director'>$director</td>";
                            echo "<td class='table-td-contract'>$contract</td>";
                            echo "<td class='table-td-payment'><span class='good'>5344</span>/<span class='bad'>234</span></td>";
                            echo "<td class='table-td-master'>$master</td>";
                            echo "</tr>";
                        }}?>
                    


                </table>
            </div>

        </div>
    </div>