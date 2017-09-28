<?php 
$messsage = '';
 ?>
<div class="container">
	
	<!-- <div class="lside">&nbsp</div> -->
	<div id="content">
		<div id="title">
			<h2>Техника на учёте</h2>
			<!-- <h3>Перечень оборудования на обслуживании (в основном по кассам)</h3> -->
		</div>
		<div class="row40">
                <div class="col-2-4">
                    <a href="?page=clientedit&id=new"><dip class="btn pos">Добавить</dip></a>
                
                
                <form  action="" method="GET" >
                    <!-- <input class="btn pos" type="submit" name="page" value="client" text="Поиск"> -->
                    
                    <input class="search" type="text" name="search" placeholder="Введите строку поиска">
                    <button class="btn" type="submit" name="page" value="client">Поиск</button>
                    <div class="text-v-middle"><?php echo $messsage; ?></div>
       
                </form>
                </div>
            </div>

            <div class="tabl">
            	<table>
            		<tr>
            			<th id="fst">№</th>
            			<th class="table-td-4">Статус</th>
            			<th class="table-td-6">Техника</th>
            			<th>Контрагент</th>
            			<th>Договор</th>
            			<th>Мастер</th>
            			<th id="lst">Место</th>
            			<!-- <th>Действие</th> -->
            		</tr>
            		<tr>
            			<td id='fst'>1</td>
            			<td>
            				<div>Обслуживание</div>
            			</td>
            			<td>Касса ШТРИХ-М</a></td>
            			<td>ООО Контрагент (85594) 2-35-78 </td>
            			<td>№ККТ-1723</td>
            		
            			<td>Сорокин Е.Ю.</td>
            			<td id="lst">Гафиатуллина 32</td>
            		</tr>
	            	<tr>
	            			<td id='fst'>2</td>
	            			<td>
	            				<div>Разовое</div>
	            			</td>
	            			<td>Принтер HP LBP-810</a></td>
	            			<td>Сергеев А.Ф. (917) 232-35-78 </td>
	            			<td>Без договора</td>
	            		
	            			<td>Сорокин Е.Ю.</td>
	            			<td id="lst">В ремонте</td>
	            		</tr>
	            	</table>
            </div>
        </div>
    </div>