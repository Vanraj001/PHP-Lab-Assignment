<!DOCTYPE html> 
<html> 
<body> 
<?php 
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}'; 
 
$arr = json_decode($jsonobj, true); 
 
echo $arr["Peter"]."<br>"; 
echo $arr["John"]."<br>"; 
echo $arr["Joe"]."<br>"; 
?> 
</body> 
</html> 