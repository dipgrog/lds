


    <div class="container">
        <?php include ('layout/navbar.php') ?>
               
        <div class="lside">&nbsp</div>
        <div id="content">
            <div id="title">
                <h2>Рабочий стол Администратора</h2>
                <h2>Здесь должна быть краткая информация по текущему состоянию</h2>
            </div>


            <div class="navbar">

                <div class="navblock">
                    <a href="?target=status">
                     <div  class="btn pos">Новая заявка</div>
                    </a>
                <select class="list-dropdown">
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

                   


                </table>
            </div>
        </div>
    </div>