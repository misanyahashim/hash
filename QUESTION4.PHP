<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
$str1 = 'The quick " " 	 brown fox';
echo preg_replace('/\s+/', '', $str1)."\n";
?>
</body>
</html>