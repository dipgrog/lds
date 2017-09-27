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

    $selected = 'journal';
    $a1 = '';
    $a2 = 'selected';
    $a3 = '';
    $a4 = '';
    $a5 = '';
    $a6 = '';
}

?>
<div class="sidebar">

    <a href="?page=journal">
        <div class="side-bar-row <?php echo $a2 ?>">
            <div class="side-bar-item"> 
                <span class="ion-ios-list-outline sbf"></span>
            </div> 

            <span >Журнал</span>

        </div>
    </a>

    <a href="?page=client">
        <div class="side-bar-row <?php echo $a3 ?>">
            <div class="side-bar-item"> 
                <span class="ion-ios-people-outline sbf"></span>
            </div> 

            <span>Контрагенты</span>
        </div>
    </a>

    <a href="?page=object">
        <div class="side-bar-row  <?php echo $a4 ?>">
            <div class="side-bar-item">
                <span class="ion-ios-calculator-outline sbf"></span>
            </div> 

            <span>Техника</span>
        </div>
    </a>


    <a href="?page=store">
        <div class="side-bar-row <?php echo $a5 ?>">
            <div class="side-bar-item">
                <span class="ion-ios-filing-outline sbf"></span>
            </div> 

            <span>Склад</span>
        </div>
    </a>


    <a href="?page=settings">
        <div class="side-bar-row <?php echo $a6 ?>">
            <div class="side-bar-item">
                <span class="ion-ios-gear-outline sbf"></span>
            </div> 

            <span>Настройки</span>
        </div>
    </a>

</div>