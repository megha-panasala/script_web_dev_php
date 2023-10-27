<?php
function add($value,$value1)
{
    return($value.'-'.$value1);
}
$array=array("hello","every","set","hope");
echo"default array";
print_r(array_reduce($array,"add","newstring"));
?>