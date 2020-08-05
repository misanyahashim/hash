<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
function check_palindrome($string) 
{
  if ($string == strrev($string))
      return 1;
  else
	  return 0;
}
echo check_palindrome('nurse')."\n";
?>

</body>
</html>