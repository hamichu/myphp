<?php
	//TODO
	
	function genText($num, $names)
	{
		for($i = 0; $i < $num; $i++)
		{
			$name = $names[$i];
			echo "$name<br><input type=\"text\" name=\"$name\"><br>";
		}
	}
	
	function genCheckbox($num, $name)
	{
		
	}
	
	function genRadio($num, $name)
	{
		
	}
	
	function genSelect($num, $name, $values)
	{
		
	}
?>