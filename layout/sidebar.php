<?php 
if (isset($_GET['page'])){
    $selected = $_GET['page'];
    switch ( $selected) {
        case 'home':
        $a1 = 'selected';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = '';

        break;

        case 'journal':

        $a1 = '';
        $a2 = 'selected';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = '';

        break;

        case 'client':

        $a1 = '';
        $a2 = '';
        $a3 = 'selected';
        $a4 = '';
        $a5 = '';
        $a6 = '';

        break;

        case 'object':

        $a1 = '';
        $a2 = '';
        $a3 = '';
        $a4 = 'selected';
        $a5 = '';
        $a6 = '';

        break;

        case 'store':

        $a1 = '';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = 'selected';
        $a6 = '';

        break;

        case 'settings':

        $a1 = '';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = 'selected';

        break;
       
        default:
        $a1 = 'selected';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = '';
        break;
    }

}else{
  
        $selected = 'home';
        $a1 = 'selected';
    }

?>
<div id="sidebar">
            <ul class="sideul">
                <a href="?page=home">
                    <li class="<?php echo $a1 ?>">
                        <span class="ion-ios-home-outline sbf"></span>
                        <br>
                        <span id="default">Главная</span>
                    </li>
                </a>
                <a href="?page=journal">
                    <li class="<?php echo $a2 ?>">
                        <span class="ion-ios-list-outline sbf"></span>
                        <br>
                        <span id="default">Журнал</span>
                    </li>
                </a>
                <a href="?page=client">
                    <li class="<?php echo $a3 ?>">
                        <i class="ion-ios-people-outline sbf"></i>
                        <br>
                        <span id="default">Контрагенты</span>
                    </li>
                </a>
                <a href="?page=object">
                    <li class="<?php echo $a4 ?>">
                        <i class="ion-ios-calculator-outline sbf"></i>
                        <br>
                        <span id="default">Техника</span>
                    </li>
                </a>
               <a href="?page=store">
                    <li class="<?php echo $a5 ?>">
                        <i class="ion-ios-filing-outline sbf"></i>
                        <br>
                        <span id="default">Склад</span>
                    </li>
                </a>
                <a href="?page=settings">
                    <li class="<?php echo $a6 ?>">
                        <i class="ion-ios-gear-outline sbf"></i>
                        <br>
                        <span id="default">Настройки</span>
                    </li>
                </a>
            </ul>
        </div>