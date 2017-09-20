<div id="wrapper">
	<?php include ('sidebar.php') ?>
	<div class="lside">&nbsp</div>
	<div id="content">
		<div id="title">
			<h1>Оборудование на учёте</h1>
		</div>
		<div class="navbar">
			<div class="navblock">
				<a href="?target=status">
					<div  class="btn pos">Добавить</div>
				</a>
				<select class="departselect">
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
            <div class="tabl">
            	<table>
            		<tr>
            			<th id="fst">№</th>
            			<th>Статус</th>
            			<th>Оборудование</th>
            			
            			<th>Контрагент</th>
            			<th>Договор</th>
            			
            			<th>Мастер</th>
            			<th id="lst">Место</th>
            			<!-- <th>Действие</th> -->
            		</tr>
            		<tr>
            			<td id='fst'>1</td>
            			<td  class='status done'>
            				<div>Обслуживание</div>
            			</td>
            			<td>Касса ШТРИХ-М</a></td>
            			<td>ООО Контрагент<div class='date'>(85594) 2-35-78</div></td>
            			<td>№ККТ-1723</td>
            		
            			<td>Сорокин Е.Ю.</td>
            			<td id="lst">В работе</td>
            		</tr>
	            	<tr>
	            			<td id='fst'>2</td>
	            			<td  class='status new'>
	            				<div>Разовое</div>
	            			</td>
	            			<td>Принтер HP LBP-810</a></td>
	            			<td>Сергеев А.Ф.<div class='date'>(917) 232-35-78</div></td>
	            			<td>Без договора</td>
	            		
	            			<td>Сорокин Е.Ю.</td>
	            			<td id="lst">В ремонте</td>
	            		</tr>
	            	</table>
            </div>
        </div>
    </div>