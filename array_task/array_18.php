<?php
$future_cities_visit=array("tokyo","new york","moskow","paris");
array_push($future_cities_visit,"london");
unset($future_cities_visit[2]);
print_r($future_cities_visit);
?>