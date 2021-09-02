<?php

/* echo $unix = strtotime("2021-11-21 21:13:32", );
echo "<br/>";
date_default_timezone_set("Asia/Kolkata");
echo date("d-m-Y h:i:s A", time());
 */

$Date = date("Y-m-d", time());
echo date('Y-m-d', strtotime($Date. ' + 1 year'));
echo "<br>";
echo date('Y-m-d', strtotime($Date. ' + 5 days'));


/* $arr = ['food'=>"asdasd",'website'=>"asdas",'random'=>"Asdasd"];
echo $enc = json_encode($arr);
echo "<br/>";
$dec = json_decode($enc);
print_r($dec); */