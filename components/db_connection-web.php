<?php
// $mysqli = '';
function Db_connect(){
global $mysqli;	
$mysqli = new mysqli("localhost", "id2646394_dipgrog", "input876", "id2646394_lds");
/* Проверить соединение */
if (mysqli_connect_errno()) {
    printf("Попытка соединения не удалась: %s\n", mysqli_connect_error());
    exit();
}
if (!$mysqli->set_charset("utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", $mysqli->error);
    exit();
}
}

?>