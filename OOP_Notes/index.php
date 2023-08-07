<?php

class phone
{
    public function call($user)
    {
        if (strlen($user) <= self::USERMINCHAR) {
            echo 'invalid user name';
        } else {
            echo "Hello " . $user . "<br>";
        }
    }
    const USERMINCHAR = 3;
    public $ram;
    public $spaces;

    private $passWord;
    public $color;
    public function setPhone($ra, $spac, $colo)
    {
        $this->ram = $ra;
        $this->spaces = $spac;
        $this->color = $colo;
    }

    public function setPassword($pass)
    {
        $this->passWord = sha1($pass);
    }
}

class tablit extends phone
{

    public $camera;

}

$tabletSamsung = new tablit();
$tabletSamsung->call('medhat');
$tabletSamsung->setPhone('3 GB', '32 GB', 'blue');
$tabletSamsung->setPassword('147147147');
$tabletSamsung->camera = '2 MP';

echo '<pre>';
var_dump($tabletSamsung);
echo '</pre>';





$iphone6 = new phone();
$iphone6->call('moh');
$iphone6->ram = '16 GB';
$iphone6->spaces = '64 GB';
$iphone6->color = 'black';

echo '<pre>';
var_dump($iphone6);
echo '</pre>';



$iphone7 = new phone();
$iphone7->setPhone('3 GB', '64 GB', 'black');
$iphone7->call('7msolu7');
$iphone7->setPassword('147158');


echo '<pre>';
var_dump($iphone7);
echo '</pre>';

echo $iphone6::USERMINCHAR . '<br>';
echo phone::USERMINCHAR . '<br>';
echo '<br>################################################################<br>';

#============================================================================
//Polymorphism
interface DBconnection
{
    public function connect();
    public function disconnect();
    public function getUsers();

    //public $sad;  dosenot have property

}

class DBmysql implements DBconnection
{
    public function connect()
    {
        echo 'connected' . '<br>';
    }
    public function disconnect()
    {
        echo 'disconnected' . '<br>';
    }
    public function getUsers()
    {
        echo nl2br("SELECT * users FROM users\n");
    }


}
class DBoracle implements DBconnection
{
    public function connect()
    {
        echo 'connectedOracle' . '<br>';
        return $this;
    }
    public function disconnect()
    {
        echo 'disconnectedOracle' . '<br>';
        return $this;
    }
    public function getUsers()
    {
        echo nl2br("SELECT* users FROM Oracleusers \n");
        return $this;
    }


}

$mysql = new DBmysql();

$mysql->connect();

$mysql->getUsers();
$mysql->disconnect();

$oracle = new DBoracle();

// $oracle->connect();

// $oracle->getUsers();

// $oracle->disconnect();

$oracle->connect()->getUsers()->disconnect(); // Chaining

echo '<br>################################################################<br>';
#============================================================================
// Trait 

trait feature1
{
    public function Funfeature1()
    {
        echo 'feature1<br>';
    }
}

trait feature2
{
    public function Funfeature2()
    {
        echo 'feature2<br>';
    }
}

trait feature3
{
    public function Funfeature3()
    {
        echo 'feature3<br>';
    }
}

trait featureCollision
{
    public function Funfeature3()
    {
        echo 'feature3 repeating<br>';
    }
}

trait allfeatures
{
    use feature1, feature2, feature3, featureCollision {
        feature3::Funfeature3 insteadof featureCollision;
        featureCollision::Funfeature3 as FunfeatuerRecorrecting;
    }
}

class Car
{
    use allfeatures;
}

class motorbyce
{
    use feature1, feature2;
}
class byce
{
    use feature3, featureCollision {
        feature3::Funfeature3 insteadof featureCollision;
        featureCollision::Funfeature3 as FunfeatuerRecorrecting;
    }
}
;

$car = new Car();

$car->Funfeature1();

$car->Funfeature2();

$car->Funfeature3();

$car->FunfeatuerRecorrecting();

$motorbyce1 = new motorbyce();

$motorbyce1->Funfeature1();

$motorbyce1->Funfeature2();

$byce1 = new byce();

$byce1->Funfeature3();

$byce1->FunfeatuerRecorrecting();

echo '<br>################################################################<br><br>';

#============================================================================
// namespaces 

require 'appleCompany.namespace.php';
require 'OPPOCompany.namespace.php';
require 'NokiaCompany.namespace.php';

$iphone = new appleCompany\Product();

echo '<pre>';

var_dump($iphone);

echo '</pre>';
$telephone = new OPPOCompany\Product();

echo '<pre>';

var_dump($telephone);

echo '</pre>';
$nokia256 = new NokiaCompany\Product();

echo '<pre>';

var_dump($nokia256);

echo '</pre>';

echo '<br>################################################################<br><br>';

#============================================================================
// include multiple classes

//this function takes name of class and requires its file name you can use it by naming files with thier class name.

spl_autoload_register(fn($class)=>require "classes/". $class . ".class.php" );

$tryTesting = new test1();
$tryTesting ->test1();

echo '<pre>';

var_dump($tryTesting);

echo '</pre>';

$tryTesting2 = new test2();
$tryTesting2->test2();

echo '<pre>';

var_dump($tryTesting2);

echo '</pre>';

$tryTesting3 = new test3();
$tryTesting3->test3();

echo '<pre>';

var_dump($tryTesting3);

echo '</pre>';

echo '<br>################################################################<br><br>';