<?php
	function getTable($rows=10, $cols=10, $color="lightblue")
		{
			echo "<table>";
			for($i = 1; $i <= $rows; $i++)
			{	
				for($j = 1; $j <= $cols; $j++)
				{
					if($j == 1 or $i == 1)
					{
						echo "<td bgcolor=\"$color\"> <b>";
					}
					else
					{
						if($i % 2 == 0)
						{
							echo "<td bgcolor=\"$color\">";
						}
						else
						{
							echo "<td bgcolor=\"$color\">";
						}
					}
					echo $i*$j;
					echo "</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
		
	function mathOperation($arg1, $arg2, $operation)
		{
			switch($operation)
			{
				case "+": return $arg1+$arg2; break;
				case "-": return $arg1-$arg2; break;
				case "*": return $arg1*$arg2; break;
				case "/": return $arg1/$arg2; break;
				case "%": return $arg1%$arg2; break;
				default : return "Wrong operation!"; break;
			}
		}
		
	function sumAll()
		{
			$sum = 0;
			foreach(func_get_args() as $val)
			{
				$sum += $val;
			}
			return $sum;
		}	
	
	function getMenu($menu, $vertical = true)
	{
		foreach($menu as $key => $val)
		{
			if($vertical)
			{
				echo "<div>";
			}
			else
			{
				echo "<div class=\"left\">";
			}
			echo "<a href=\"$val\">$key</a>";
			echo "</div>";
		}
	}
?>