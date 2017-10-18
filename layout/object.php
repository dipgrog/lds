  
<?php Db_connect(); ?>

<div class="container">
	
	<!-- <div class="lside">&nbsp</div> -->
	<div id="content">
		
	<div class="row40"> 
           <?php include ('layout/toolbar.php') ?>
           <?php include ('layout/search.php') ?>
      </div>

            <div class="tabl">
            	<table>
            		<thead>
            		<tr>
            			<th class="table-td-num">№</th>
            			<th class="table-td-num">C</th>
            			<th class="table-td-object">Техника</th>
            			<th class="table-td-6">Серийный номер</th>
            			<th class="table-td-client">Контрагент</th>
            			
            			<th id="table-td-num">Рассчет</th>
            			<th id="table-td-num">Место</th>

            		</tr>
            		</thead>
            		<tbody >
            		
<?php
					

					$query = "SELECT a.id, a.name, a.sn, a.clname, a.shortname, a.opf, a.clid FROM ";
					$query .=" (SELECT u.* , c.* FROM units AS u , client AS c ";
					$query .=" WHERE ";
					$query .=" u.client = c.clid) ";

					$query .=" AS a ";
					$query .=" WHERE a.name LIKE '%$search%' ";


                    $query .= " OR ";
                    $query .= "a.sn ";
                    $query .= "LIKE '%$search%' ";

                    $query .= " OR ";
                    $query .= "a.clname ";
                    $query .= "LIKE '%$search%' ";

                    $query .= "ORDER BY a.clname";

                    if ($stmt = $mysqli->prepare($query)){
                        $stmt->execute();
                        $stmt->bind_result($aid,
                         $aname,
                         $asn,
                         $aclient,
                         $ashortname,
                         $aopf,
                     	 $aclid);
                        $i=0;
                        
                        while ($stmt->fetch()){
                            $i++;
                            $cut='';
                            echo "<tr>";
                            echo "<td class='table-td-num text-h-center'>{$i}</td>";
                            echo "<td class='table-td-status text-h-center'>C</td>";
                            echo "<td class='table-td-object'>$aname</td>";
                            echo "<td class='table-td-object'>$asn</td>";
                            echo "<td class='table-td-client'><a href='?page=clienttech&clid=$aclid'>$aopf $ashortname</a></td>";
                            echo "<td class='table-td-client text-h-center'>Оплата/Долг</td>";
                            echo "<td class='table-td-num text-h-center'>5</td>";
                            echo "</tr>";
                        }}?>

	            	</tbody>
	            	</table>
            </div>
        </div>
    </div>