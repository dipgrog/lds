
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
<div class="container">
    
    <!-- <div class="lside">&nbsp</div> -->
    <div id="content">
        <div class="row40"> 
           <?php include ('layout/toolbar_store.php') ?>
           <?php include ('layout/search.php') ?>
        </div>

    <!-- <div class="pad">&nbsp</div> -->


    <div class="row">

        <div class="col-4-4">

            <div class="tabl">
                <table>
                    <tr>
                        <th class="table-td-25 text-h-center">№</th>
                        <th class="table-td-75">Дата</th>
                        <th >Номенклатура</th>
                        <th class="table-td-70">Контрагент</th>
                        <th class="table-td-75">Мастер</th>
                    </tr>
                    <tr>
                        <td class="text-h-center">1</td>
                        <td>02.03.2017</td>
                        <td>
                            <ul class="list-default">
                                <li>
                                    Тонер ML1010 - 1 шт.
                                </li>
                                <li>
                                    Ракель ML1010 - 1 шт.
                                </li>
                            </ul>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                     <tr>
                        <td class="text-h-center">2</td>
                        <td>02.03.2017</td>
                        <td>
                            <ul class="list-default">
                                <li>
                                    Тонер ML1010 - 1 шт.
                                </li>
                                <li>
                                    Ракель ML1010 - 1 шт.
                                </li>
                            </ul>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>

        </div> <!-- COL end -->


    </div> <!-- ROW end -->


</div>
</div>