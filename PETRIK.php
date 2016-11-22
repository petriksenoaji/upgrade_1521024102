<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table border="1">
	<tr>
		<th rowspan="2">INPUT</th>
		<th colspan="5">OUTPUT</th>
	</tr>
	<tr>
		<th>A</th>
		<th>E</th>
		<th>I</th>
		<th>U</th>
		<th>O</th>
	</tr>
	<tr>
		<td>
		<?php
		$n1="PETRICK SENO AJI ";
		echo $n1;
		?>
		</td>
		<td>
		<?php
		echo substr_count($n1,"A");
		?>
		</td>
		<td>
		<?php
		echo substr_count($n1,"E");
		?>
		</td>
		<td>
		<?php
		echo substr_count($n1,"I");
		?>
		</td>
		<td>
		<?php
		echo substr_count($n1,"U");
		?>
		</td>
		<td>
		<?php
	   echo substr_count($n1,"O");
		?>
		</td>
	</tr>
</table>
</body>
</html>
