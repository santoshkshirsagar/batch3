<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Recipe{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public static function testStatic(){
        echo "<br/>This text is from Trat";
    } 
}
trait Example{
    public $var1="sd";
}
class Breakfast extends Recipe{
    use Example;
    public function __construct($name)
    {
        parent::__construct($name);
    }
}

$recipe = new Recipe("Paneerad asda sd");
$breakfast = new Breakfast("Idli");

echo $breakfast->name;
echo $breakfast->var1;
echo $breakfast->getName();
echo "<br/>";
echo $recipe->name;

Recipe::testStatic();


// public - anywhere
// protected  - can be called from same class or child class
// private - only from same class