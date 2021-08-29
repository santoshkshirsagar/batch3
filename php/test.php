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
