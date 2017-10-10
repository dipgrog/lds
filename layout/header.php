<?php 
ini_set('display_errors',1);
error_reporting(E_ALL); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Учет ремонта оборудования</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,500&amp;subset=cyrillic" rel="stylesheet">  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
</head>
<body>

    <?php 
    if (isset($_GET['clid'])) {
        $clid = $_GET['clid'];
    }

    ?>
    <?php 

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
            $page_title ='Журнал учета выполненных работ (НЕ РАБОТАЕТ)';
            $add_link = '?page=order&id=new';
            break;

            case 'client':
            $a1 = '';
            $a2 = '';
            $a3 = 'selected';
            $a4 = '';
            $a5 = '';
            $a6 = '';
            $page_title ='Контрагенты (РАБОТАЕТ ЧАСТИЧНО)';
            $add_link = '?page=clientedit&clid=new';
            break;



            case 'object':
            $a1 = '';
            $a2 = '';
            $a3 = '';
            $a4 = 'selected';
            $a5 = '';
            $a6 = '';
            $page_title ='Техника на учёте (РАБОТАЕТ ЧАСТИЧНО)';
            break;

            case 'store':
            $a1 = '';
            $a2 = '';
            $a3 = '';
            $a4 = '';
            $a5 = 'selected';
            $a6 = '';
            $page_title ='Заявки на комплектующие и расходные материалы (НЕ РАБОТАЕТ)';
            break;

            case 'settings':
            $a1 = '';
            $a2 = '';
            $a3 = '';
            $a4 = '';
            $a5 = '';
            $a6 = 'selected';
            $page_title ='Настройки справочников (РАБОТАЕТ ЧАСТИЧНО)';
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

            case 'order_edit':
            $a1 = '';
            $a2 = 'selected';
            $a3 = '';
            $a4 = '';
            $a5 = '';
            $a6 = '';
            $page_title ='Заказ № ';
            break;

            case 'clientedit':
            if ($_GET['clid'] == 'new'){
                $page_title ='Добавление контрагента (РАБОТАЕТ)';
            }else{
                $page_title ='Контрагент: '. $opf . ' ' . $shortname;
            }
            $a1 = '';
            $a2 = '';
            $a3 = 'selected';
            $a4 = '';
            $a5 = '';
            $a6 = '';
            break;

            case 'clienttech':
            $a1 = '';
            $a2 = '';
            $a3 = 'selected';
            $a4 = '';
            $a5 = '';
            $a6 = '';
            $page_title ='Контрагент: '. $opf . ' ' . $shortname;
            $add_link = '?page=clientedit&clid=new';
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
        $page_title ='Журнал учета выполненных работ (НЕ РАБОТАЕТ)';
        $add_link = '?page=order&id=new';
    }
    ?>

    <?php 
    if (isset($_SERVER['HTTP_REFERER'])){
        $backlink = $_SERVER['HTTP_REFERER'];
    }
    ?>

    <div class="top-header">

        <div class="row-auto">
            <div class="navbar">
                <ul class="navbar-ul">
                    <a href="?page=journal">
                        <li>
                            <div class="navbar-item <?php echo $a2; ?>">
                                <span class="ion-navicon-round sbf">
                                    
                                <span class="default">Журнал</span>
                                </span>
                            </div>
                        </li>
                    </a>

                    <a href="?page=client">
                        <li>

                            <div class="navbar-item <?php echo $a3; ?>">

                                <span class="ion-person-stalker sbf">
                                   <span class="default">Контрагенты</span> 
                               </span>



                           </div>
                       </li>
                   </a>
                   <a href="?page=object">
                       <li>

                        <div class="navbar-item  <?php echo $a4; ?>">

                            <span class="ion-printer sbf">

                                <span class="default">Техника</span>    

                            </span>


                        </div>
                    </li>
                </a>
                <a href="?page=store">
                    <li>

                        <div class="navbar-item <?php echo $a5; ?>">

                            <span class="ion-filing sbf">

                                <span class="default">Склад</span>

                            </span>


                        </div>
                    </li>
                </a>
                <a href="?page=settings">
                    <li>

                        <div class="navbar-item <?php echo $a6; ?>">
                            <span class="ion-settings sbf">
                                
                            <span class="default">Настройки</span>
                            </span>
                        </div>

                    </li>
                </a>
            </ul>
        </div>
    </div>
    <div class="row30">
        <div class="page-title">
      <!--   <div class="col-20">
            <a href="?page=journal" class="ion-arrow-left-a sbf"></a>
        </div> -->
        <div class="col-7-8">
            <h3><?php echo $page_title; ?></h3>
        </div>
    </div>
</div>

</div>