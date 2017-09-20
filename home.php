


    <div id="wrapper">
        <?php include ('sidebar.php') ?>
               
        <div class="lside">&nbsp</div>
        <div id="content">
            <div id="title">
                <h1>Рабочий стол Администратора</h1>
            </div>


            <div class="navbar">

                <div class="navblock">
                    <a href="?target=status">
                     <div  class="btn pos">Новая заявка</div>
                    </a>
                <select class="departselect">
                    <option>
                        Все отделы
                    </option>
                    <option>
                        ККТ
                    </option>
                    <option>
                        КМТ
                    </option>
                    <option>
                        ВТ
                    </option>
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
        <!--     <form action="" method="POST" class="myform">
                <input class="status" type="text" name="name" placeholder="Введите наименование">
                <input class="btn pos" type="submit" name="submit" value="Добавить">
            </form> -->



            <div class="tabl">

                <table>
                    <tr>
                        <th id="fst">№</th>
                        <th>Тип</th>
                        <th>Модель</th>
                        <th>Статус</th>
                        <th>Контрагент</th>
                        <th>Телефон</th>
                        <th>Мастер</th>
                        <th>Место</th>
                        <!-- <th>Действие</th> -->
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
                            echo "<td id='edit'><a href='form.php?edit&id={$id}'>изменить</a></td>";
                            echo "<td></td>";
     /* статус */           echo "<td  class='status new'><div>Новый</div><div class='date'>01.02.2017</div></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td></td>";
                            echo "<td>10</td>";
                            // echo "<td></td>";
                            echo "</tr>";
                        }
                    }
                    ?>


                </table>
            </div>
        </div>
    </div>