<html>
	<head>
		<title>Generate form</title>
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
	</head>
	
	<body>
		<p>
			Вы можете определить переменную sNum в области $_GET[], которая задает максимальное кол-во генерируемых элементов<br>
			<?php
				$len = 10;
				if($_GET)
				{
					if(isset($_GET['sNum']))
					{
						if(is_numeric($_GET['sNum']))
						{
							$len = $_GET['sNum'];
						}
						else
						{
							echo "sNum не число";
							exit();
						}
					}
					else
					{
						echo "sNum не определена";
						exit();
					}
				}
				
			?>
		</p>
		<form action="generate.php" method="POST">
			<!--
			<p>
				<input id="rText" type="Radio" value="Text" name="fType" checked/><label for="rText">Text</label><br>
				<input id="rCheckbox" type="Radio" value="Checkbox" name="fType"/><label for="rCheckbox">Checkbox</label><br>
				<input id="rRadio" type="Radio" value="Radio" name="fType"/><label for="rRadio">Radio</label><br>
			</p>
			
			-->
			<select name="fType" name="1">
				<option value="text">Text</option>
				<option value="checkbox">Checkbox</option>
				<option value="radio">Radio button</option>
				
				<option value="select">Select</option>
			</select>
			<br>
			
			
			<p>
				<label for="count">Выберите количество элементов: </label><select id="count" name="count" size="1">
					<?php
						for($i = 1; $i <= $len; $i++)
						{
							echo "<option value=\"$i\">$i</option>";
						}
					?>
				</select><br>
			</p>
			<p>
				<label for="names">Введите имена элементов(без пробелов и через точку с запятой)</label><br><input id="names" type="text" name="namesStr"/><br>
			</p>
			<p>
				<input type="submit" value="Generate"/><br>
			</p>
			<?php
				
				if($_POST)
				{
					if(is_numeric($_POST['count']))
					{
						include "genLibrary.php";
						
						$val = $_POST['fType'];
						$names = explode(";", strip_tags($_POST['namesStr']), $_POST['count'] + 1);
						switch($val)
						{
							case "text": genText($_POST['count'], $names); break;
							case "checkbox": genCheckbox($_POST['count'], $name); break;
							case "radio": genRadio($_POST['count'], $name); break;
							case "select": genSelect($_POST['count'], $name, $values); break;
						}
					}
					else
					{
						echo "Ошибка ввода!";
					}
				}
			?>
			
		</form>
	</body>
</html>

