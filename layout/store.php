
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
      
      <?php include ('layout/search.php') ?>


    <!-- <div class="pad">&nbsp</div> -->


    <div class="row">

        <div class="col-4-4">

            <div class="tabl">
                <table>
                    <tr>
                        <th class="table-td-1 text-h-center">№</th>
                        <th class="table-td-2">Дата</th>
                        <th class="table-td-10">Номенклатура</th>
                        <th>Контрагент</th>
                        <th class="table-td-4">Мастер</th>
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
                </table>
            </div>

        </div> <!-- COL end -->


    </div> <!-- ROW end -->


</div>
</div>