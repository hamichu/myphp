<?php
	$login = array("Pak" => "123", "Andrey" => "321", "Pakapitangel" => "breakthehabit");
	
?>

<html>
	<head>
		<title>Password</title>
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
		<h1 class="center">Задание 6-2</h1>
		
		<h2>Пароли логины</h2>
		<form action="pass.php" method=POST>
			
			<select name="log" size="1">
				<?php
					foreach($login as $k => $v)
					{
						echo "<option value=\"$k\">";
							echo "$k";
						echo "</option>";
					}
				
				?>
			</select>
			
			<!--<p><input id="log" type="text" value="Введите логин" onClick="javascript:myClear('log')" /></p>-->
			<p><input id="pas" name="pass" type="password" value="Пароль" onClick="javascript:myClear('pas')" /></p>
			<p><input type="submit" value="Отправить"/></p>
		</form>
	</body>
</html>

<?php
if($_POST)
{
	if($login[$_POST["log"]] == $_POST["pass"])
	{
		echo "<a href=\"secret.php\">Secret.php</a>";
	}
	else
	{
		echo "<p>Wrong password or login</p>";
	}
}
?>