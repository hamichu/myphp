

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
		<h1 class="center">������� 6</h1>
		
		<h2>�����</h2>
		<form action="module_6.php" method=POST>
			��� <br><input id="inp1" onClick="javascript:myClear('inp1')" type="text" name="first_name" value="������� ���"><br>
			������� <br><input id="inp2" onClick="javascript:myClear('inp2')" type="text" name="last_name" value="������� �������"><br>
			E-mail <br><input id="inp3" onClick="javascript:myClear('inp3')" type="text" name="email" value="������� e-mail"><br>
			<p>�������� ���-������ �� ������:</p>
			<select name="list" size="1">
				<option value="Smth">���-�� ����</option>
				<option value="SmthElse">���-�� ������</option>
				<option value="Nothing">�� ���� �� ������</option>
			</select>
			<p>�������� ����, ������� �� �� ������ ��������:<br></p>
			<input type="checkbox" name="kurs[]" value="PHP"/>PHP<br>
			<input type="checkbox" name="kurs[]" value="Lisp"/>Lisp<br>
			<input type="checkbox" name="kurs[]" value="Perl"/>Perl<br>
			<input type="checkbox" name="kurs[]" value="Unix"/>Unix<br>
			<p>��� �� ������, ����� �� ����� � ���?<br></p>
			<textarea name="comment" cols=32 rows=5></textarea><br>
			<p>�������� ����������<br></p>
			<input type="radio" name="rad" value="First" checked/>������<br>
			<input type="radio" name="rad" value="Second"/>������<br>
			<input type="radio" name="rad" value="Third"/>������<br>
			<br>
			<input type="submit" value="���������"/>
			<input type="reset" value="��������"/>
		</form>
		<div>
			<?php
				//TODO �������� ������� ������
				
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