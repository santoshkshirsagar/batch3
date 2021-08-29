<?php
$count = 0 ;

$array = ["Ajit", "Deepak", "Fulchand", "Kunal","DKN", "Syed"];
$string="";
while($string!="Kunal"){
    echo $array[$count]."<br/>";
    $count += 1;
    $string=$array[$count];
}
echo "<br><br>";

for($i=5;$i<10;$i++){
    echo $i."<br/>";
}
echo "-----------------";

while($count<10){
    $count += 1;
    echo $count."<br/>";
}

echo "-------foreach----------<br/>";

foreach($array as $name){
    echo $name."<br/>";
}



function calculateSum($a, $b){
    // function is set of multiple line code
    return $sum = $a+$b;
}

echo calculateSum(3,6);
echo "<br/>";
echo calculateSum(32,8);
echo "<br/>";
echo calculateSum(56,9);