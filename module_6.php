

<html>
	<head>
		<title>Module 6</title>
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
		<h1 class="center">Задание 6</h1>
		
		<h2>Формы</h2>
		<form action="module_6.php" method=POST>
			Имя <br><input id="inp1" onClick="javascript:myClear('inp1')" type="text" name="first_name" value="Введите имя"><br>
			Фамилия <br><input id="inp2" onClick="javascript:myClear('inp2')" type="text" name="last_name" value="Введите фамилию"><br>
			E-mail <br><input id="inp3" onClick="javascript:myClear('inp3')" type="text" name="email" value="Введите e-mail"><br>
			<p>Выберите что-нибудь из списка:</p>
			<select name="list" size="1">
				<option value="Smth">Что-то одно</option>
				<option value="SmthElse">Что-то другое</option>
				<option value="Nothing">Ни одно ни другое</option>
			</select>
			<p>Выберите курс, который вы бы хотели посещать:<br></p>
			<input type="checkbox" name="kurs[]" value="PHP"/>PHP<br>
			<input type="checkbox" name="kurs[]" value="Lisp"/>Lisp<br>
			<input type="checkbox" name="kurs[]" value="Perl"/>Perl<br>
			<input type="checkbox" name="kurs[]" value="Unix"/>Unix<br>
			<p>Что вы хотите, чтобы мы знали о вас?<br></p>
			<textarea name="comment" cols=32 rows=5></textarea><br>
			<p>Выберите пожалуйста<br></p>
			<input type="radio" name="rad" value="First" checked/>Первое<br>
			<input type="radio" name="rad" value="Second"/>Второе<br>
			<input type="radio" name="rad" value="Third"/>Третье<br>
			<br>
			<input type="submit" value="Отправить"/>
			<input type="reset" value="Отменить"/>
		</form>
		<div>
			<?php
				//TODO Проверка входных данных
				
				$fname = $_POST["first_name"];
				$lname = $_POST["last_name"];
				$email = $_POST["email"];
				$list  = $_POST["list"]; 
				$comm  = $_POST["comment"];
				$rad  = $_POST["rad"];
				$k = $_POST['kurs'];
				
				if($_POST)
				{
					
					echo "<p>Checkbox: <br>";
						if(count($k) > 0)
						{
							foreach($k as $value)
							{
								echo $value. "<br>";
							}
						}
					echo "</p>";
					
					echo "<p>Text: <br>";
						echo $fname. "<br>";
						echo $lname. "<br>";
						echo $email. "<br>";
					echo "</p>";
					
					echo "<p>List: <br>";
						echo $list. "<br>";
					echo "</p>";
					
					echo "<p>Radio: <br>";
						echo $rad. "<br>";
					echo "</p>";
					
					echo "<p>Textarea: <br>";
						echo $comm. "<br>";
					echo "</p>";
				}
				
				
			?>
		</div>
	</body>
</html>