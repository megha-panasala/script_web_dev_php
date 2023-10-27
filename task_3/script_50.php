<?php
function greator_number($value){
    return($value>5);
}
$filter_elements=array(4,56,8,1,23,56,6,7,5);
echo"before filter";
print_r($filter_elements);
echo"<br>after filter";
print_r(array_filter($filter_elements,"greator_number"));
?>