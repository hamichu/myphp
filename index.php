<?php
$str = "Andrey";
$int = 23;
$dbl = 81.23;
define(MY_CONST, 11);
$eight = 034;
$sixt = 0x321;
?>

<html>
	<head>
		<title>First meet with PHP</title>
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
		<script type="text/javascript">
			function myClear(name)
			{
				inp = document.getElementById(name);
				inp.value = "";
			}
		</script>
	</head>
	<body>
	
<!-- =======================Задание 1-1===============================--> 
		<h1 class="center">Задание 1-1</h1>
		<table >
			<tr>
				<th colspan=2>
					<p>Переменные PHP</p>
				</th>
			</tr>
			
			<tr>
				<td>
					<p>String</p>
				</td>
				<td>
					 <p><?php echo $str;?></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p>Integer</p>
				</td>
				<td>
					 <p><?php echo $int;?></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p>Double</p>
				</td>
				<td>
					 <p><?php echo $dbl;?></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p>Const</p>
				</td>
				<td>
					 <p><?php echo MY_CONST;?></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p>Octal</p>
				</td>
				<td>
					 <p><?php echo "$eight"?></p>
				</td>
			</tr>
			
			<tr>
				<td>
					<p>Hexadecimal</p>
				</td>
				<td>
					 <p><?php echo $sixt;?></p>
				</td>
			</tr>
			
		</table>
		<hr>
<!-- ======================Задание1-2==============================-->
		<h1 class="center">Задание 1-2</h1>
		<h3 class="center">Первый вариант</h3>
		<div class="verse">
			<?php echo "Вы помните, вы всё, конечно, помните,<br>"?><?php echo "Как я стоял, приблизившись к стене,<br>"?><?php echo "Взволнованно ходили вы по комнате<br>"?><?php echo "И что-то резкое в лицо бросали мне…<br>"?><p class="italic"><?php echo "Сергей Есенин \"Письмо женщине\"<br>"?></p>
		</div>
		
		<h3 class="center">Второй вариант</h3>
		<div class="verse">
			<?php echo "Вы помните, вы всё, конечно, помните,<br>Как я стоял, приблизившись к стене,<br>Взволнованно ходили вы по комнате<br>И что-то резкое в лицо бросали мне…<br><p class=\"italic\">Сергей Есенин \"Письмо женщине\"<br></p>"?>
		</div>

		<h3 class="center">Третий вариант</h3>
		<div class="verse">
			
			<p> <?php echo "Вы помните, вы всё, конечно, помните,<br>"?></p>
			<p> <?php echo "Как я стоял, приблизившись к стене,<br>"?></p>
			<p> <?php echo "Взволнованно ходили вы по комнате<br>"?></p>
			<p> <?php echo "И что-то резкое в лицо бросали мне…<br>"?></p>
			<p> <?php echo "<p class=\"italic\">Сергей Есенин \"Письмо женщине\"<br></p>"?>
		</div>
		<hr>
<!-- ======================Задание1-3==============================-->
		<h1 class="center">Задание 1-3</h1>
		<?php
			$aaa = 10 + "5 little piggies";
			$bbb = "10 little piggies and 100" + 5;
			$ccc = "10" + "5 little piggies" + 5;
			$ddd = "10 little piggies" + "5 little piggies" + 1;
		?>
		<div class="center">
		<p> <?php echo "value of aaa = $aaa";?>
		<p> <?php echo "value of bbb = $bbb";?>
		<p> <?php echo "value of ccc = $ccc";?>
		<p> <?php echo "value of ddd = $ddd";?>
		<p> <?php echo "type of aaa = ". gettype($aaa);?>
		<p> <?php echo "type of bbb = ". gettype($bbb);?>
		<p> <?php echo "type of ccc = ". gettype($ccc);?>
		<p> <?php echo "type of ddd = ". gettype($ddd);?>
		<p> <?php echo "Вывод: оператор \"+\" приводит данные к численному виду. Конкатенация делается точкой"?>
		
		</div>
		<hr>
<!-- ======================Задание2-1==============================-->
		<h1 class="center">Задание 2-1</h1>
		<div class="center">
		<?php
			$age = 23;
			echo "<p>Age = $age</p>";
			if( ($age >= 18) and ($age <= 59) )
			{
				echo "<p>Вам еще работать и работать(((...</p>";
			}
			else	
			{
				if($age > 59)
				{
					echo "<p>Вам пора на пенсию</p>";
				}
				else
				{
					if( ($age >= 1) and ($age <= 17) )
					{
						echo "<p>Вам ещѐ рано работать</p>";
					}
					else
					{
						echo "<p>Неизвестный возраст</p>";
					}
				}
			}
		?>
		</div>
		<hr>
<!-- ======================Задание2-2==============================-->
		<h1 class="center">Задание 2-2</h1>
		<?php
			$rows = 10;
			$cols = 10;
			
		?>
		
		<table>
			<?php
				for($i = 1; $i <= $rows; $i++)
				{	
					for($j = 1; $j <= $cols; $j++)
					{
						if($j == 1 or $i == 1)
						{
							echo "<td class=\"first\"> <b>";
						}
						else
						{
							if($i % 2 == 0)
							{
								echo "<td class=\"second\">";
							}
							else
							{
								echo "<td class=\"third\">";
							}
						}
						echo $i*$j;
						echo "</td>";
					}
					echo "</tr>";
				}
			?>
		</table>	

		<hr>
<!-- ======================Задание4-1==============================-->
		<h1 class="center">Задание 4-1</h1>
		<?php
			$names = array("Андрей","Лилия","Алексей","Василий","Игорь","Вадим","Михаил");
			print_r($names);
			$namesKeys = array_keys($names, "Василий");
			echo "<p>Василий повторяется в массиве ".count($namesKeys)." раз(а)</p>";
			foreach ($namesKeys as $key)
			{
				echo "<p>Под индексом $key </p>";
			}
		?>
		<hr>
		<?php
			echo "<p>Мы удалили всех кроме Василия</p>";
			$len = count($names);
			for($i=0; $i < $len; $i++)
			{
				if($names[$i] !== "Василий")
				{
					unset($names[$i]);
				}
			}
			print_r($names);
			$k = array_keys($names, "Василий");
			unset($names);
			echo "<p>Мы удалили Василия. Массива больше нет. Сортировать некого</p>";
			print_r($names);
			
		?>
<!-- ======================Задание4-2==============================-->
		<h1 class="center">Задание 4-2</h1>	
		<p>Array_chunk($names, 3)</p>
		<?php
			$persons = array("Иванов","Петров","Сидорова","Зайцева","Волкова");
			print_r($persons);
			$triples = array_chunk($persons,3);
			foreach($triples as $k => $table)
			{
				echo "За столиком $k сидят: <ul>";
				foreach($table as $pers)
				{
					echo "<li>$pers</li>";
				}
				echo "</ul>";
			}
		?>
		<p>Array_slice($arr, 2)</p>
		<?php
			$arr = array(1,2,3,4,5);
			print_r($arr);
			$sub_arr = array_slice($arr,2);
			print_r($sub_arr);
			$sub_arr = array_slice($arr,-2);
			print_r($sub_arr);
			foreach($triples as $k => $table)
			{
				echo "За столиком $k сидят: <ul>";
				foreach($table as $pers)
				{
					echo "<li>$pers</li>";
				}
				echo "</ul>";
			}
		?>
		<hr>
<!-- ======================Задание4-3==============================-->
		<h1 class="center">Задание 4-3</h1>	
		<?php
		{
			$cities = array(
						"Россия" => array("Ростов-на-Дону","Москва","Санкт-Петербург","Томск"),
						"Германия" => array("Берлин","Мюнхен","Гамбург","Дрезден"),
						"Италия" => array("Рим","Неаполь","Венеция","Франция")
			);
			foreach($cities as $key => $val)
			{
				echo "<h4>$key</h4>";
				echo "<p class=\"italic\">";
				$len = count($val);
				for($i = 0; $i < $len; $i++)
				{
					if($i !== $len-1)
					{
						echo "$val[$i], ";
					}
					else
					{
						echo "$val[$i]";
					}
				}
				echo "</p>";
			}
		}
		?>
		<hr>
<!-- ======================Задание4-4==============================-->
		<h1 class="center">Задание 4-4</h1>	
		<h2 class="center">Информация о сотрудниках</h2>	
		<?php
		{
			/*
			$employee = array(
						"Имя" => array("Александр", "Алексей", "Николай", "Олег"),
						"Фамилия" => array("Новиков", "Бодров", "Хмельницкий", "Нестеров"),
						"Возраст" => array(35,28,28,44),
						"Адрес" => array("ул.Ленина 99", "пр. Ворошиловский 61", "ул. Социалистическая 25", "ул. Петровка 11"),
						"Телефон" => array("125-89-63", "256-89-63", "100-89-63", "330-80-63"),
						"Выручка за день" => array(5000,5500,10000,4998),
			);
			*/
			$employee = array(
						array("Имя","Фамилия","Возраст","Адрес","Телефон","Выручка за день"),
						array("Александр","Новиков","35","ул.Ленина 99","125-89-63","5000",),
						array("Алексей","Бодров","28","пр. Ворошиловский 61","256-89-63","5500",),
						array("Николай","Хмельницкий","28","ул. Социалистическая 25","100-89-63","10000",),
						array("Олег","Нестеров","44","ул. Петровка 11",  "330-80-63","4998")
			);
			echo "<table>";
			$i = 0;
			$sum = 0;
				foreach($employee as $key => $val)
				{
					echo "<tr>";
					if($i !== 0)
					{
						foreach($val as $value)
						{
							echo "<td>";
								echo "$value";
							echo "</td>";
							
						}
					}
					else
					{
						foreach($val as $value)
						{
							echo "<td class=\"center\"><b>";
								echo "$value";
							echo "</td>";
						}
						$i++;
					}
					echo "</tr>";
				}
			echo "</table>";
			$ind = count($employee[count($employee)-1]) - 1;
			
			
			foreach($employee as $val)
			{
				$sum = $sum + $val[$ind];
			}
			echo "<h3 class=\"center\">Сумма выручки: $sum</h3>";
			
		}
		?>
		<hr>
<!-- ======================Задание5==============================-->
		<h1 class="center">Задание 5</h1>
		<?php
			include "library.php";
			//echo sumAll(12,13,14,15,16,23,34);
			
			
			//echo mathOperation(3,5,"+");
			
			getTable();
			getTable(12);
			getTable(12,23,"scarlet");
			
			
			$menu = array(
						"Главная" => "index.php",
						"Контакты" => "contact.php"
			);
			
			getMenu($menu, true);
			echo "<br>";
			getMenu($menu, false);
		?>
		
		<!--<a href="contact.php">Contact.php</a>-->
	</body>
</html>
