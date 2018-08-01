<?php
/**
 * Created by PhpStorm.
 * User: César
 * Date: 31/07/2018
 * Time: 7:12 PM
 */
$name=$_POST('name');
$clave=$_POST('clave');

echo $name;
echo $clave;


if($clave=='1234'){
    setcookie("control", "1234", time()+30000,"/","localhost");
    header ("Location: correcto.php");
}
else{
    header ("Location: error.php");
}