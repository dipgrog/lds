<?php 
ini_set('display_errors',1);
error_reporting(E_ALL); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Учет ремонта оборудования</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
</head>
<body>


	<?php 
$page_title ='';
$add_link = '';
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
        $page_title ='';
        $add_link = '';
        break;

        case 'journal':

        $a1 = '';
        $a2 = 'selected';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = '';
        $page_title ='Журнал учета выполненных работ';
        $add_link = '?page=order&id=new';
        break;

        case 'client':

        $a1 = '';
        $a2 = '';
        $a3 = 'selected';
        $a4 = '';
        $a5 = '';
        $a6 = '';
        $page_title ='Контрагенты';
        $add_link = '?page=clientedit&id=new';
        break;

        case 'object':

        $a1 = '';
        $a2 = '';
        $a3 = '';
        $a4 = 'selected';
        $a5 = '';
        $a6 = '';
        $page_title ='Техника на учёте';
        break;

        case 'store':

        $a1 = '';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = 'selected';
        $a6 = '';
        $page_title ='Заявки на комплектующие и расходные материалы';
        break;

        case 'settings':

        $a1 = '';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = 'selected';
        $page_title ='Настройки справочников';
        break;

        case 'order':

        $a1 = '';
        $a2 = 'selected';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = '';
        $page_title ='Новый заказ';
        break;

         case 'clientedit':
         if ($_GET['id'] == 'new'){
            $page_title ='Добавление контрагента';
        }else{
            $page_title ='Редактирование контрагента';
        }
        $a1 = '';
        $a2 = '';
        $a3 = 'selected';
        $a4 = '';
        $a5 = '';
        $a6 = '';
        
        break;

        default:
        $a1 = 'selected';
        $a2 = '';
        $a3 = '';
        $a4 = '';
        $a5 = '';
        $a6 = '';
        $page_title ='';
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
    $page_title ='Журнал учета выполненных работ';
}
?>


<div class="top-header">


<div class="navbar">
    <ul class="navbar-ul">
        <li>
    <a href="?page=journal">
        <div class="navbar-item <?php echo $a2 ?>">
            
                <span class="ion-navicon-round sbf">
                    <span class="default" >Журнал</span>
                </span>

        </div>
    </a>
        </li>

    <li>

    <a href="?page=client">
        <div class="navbar-item <?php echo $a3 ?>">
            
                <span class="ion-person-stalker sbf">
                   <span class="default">Контрагенты</span> 
                </span>
            

            
        </div>
    </a>
    </li>
    <li>

    <a href="?page=object">
        <div class="navbar-item  <?php echo $a4 ?>">
            
                <span class="ion-printer sbf">
                    
                    <span class="default">Техника</span>    
                    
                </span>
            

        </div>
    </a>
    </li>
    <li>

    <a href="?page=store">
        <div class="navbar-item <?php echo $a5 ?>">
            
                <span class="ion-filing sbf">
                    
            <span class="default">Склад</span>
                    
                </span>
            

        </div>
    </a>
    </li>
    <li>

    <a href="?page=settings">
        <div class="navbar-item <?php echo $a6 ?>">
            
                <span class="ion-settings sbf">
                    
            <span class="default">Настройки</span>
                    
                </span>
            

        </div>
    </a>
    </li>
    </ul>
</div>

    <div class="page-title">
        <h3><?php echo $page_title; ?></h3>

    </div>
	

 </div>