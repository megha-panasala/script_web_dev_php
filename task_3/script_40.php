<?php
$name=array("megha","shivani","vishva");
$name2=array("malvi","nidhi");
print_r($name);
echo"<br/>";
array_splice($name,0,2,$name2);
print_r($name);
?>