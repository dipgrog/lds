

    <div id="wrapper">
         <?php include ('sidebar.php') ?>
        <div class="lside">&nbsp</div>
        <div id="content">
            <div id="title">
                <h1>Журнал учета клиентов</h1>
            </div>
            <div class="navbar">
                <div class="navblock">
                <ul class="navul">
                    <a href="?target=status"><li class="btn">Добавить</li></a>
                    <a href="?target=type"><li class="btn">Юр. лица</li></a>
                    <a href="?target=opf"><li class="btn">Физ. лица</li></a>  
                </ul>
                </div>
                <div class="navblock">
                <form action="" method="POST" >
                    <input class="inputfield" type="text" name="name" placeholder="Введите строку поиска">
                    <input class="btn pos" type="submit" name="submit" value="Поиск">
       
                </form>
                </div>
            </div>
            <div class="pad"></div>
    <!--         <div class="addclient">
            <form action="" method="POST" class="myform">
                <input class="status" type="text" name="name" placeholder="Введите наименование">
                <input class="btn pos" type="submit" name="submit" value="Добавить">
            </form>
            </div> -->
            

            <div class="tabl">

                <table>
                    <tr>
                        <th id="fst">№</th>
                        <th>Контрагент</th>
                        <th>Телефон</th>
                        <th>Договор</th>
                        <th>Сумма</th>
                        <th>Мастер</th>


                    </tr>
                    <tr>
                        <td>&nbsp</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    


                </table>
            </div>
        </div>
    </div>