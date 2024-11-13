<?php

$a='user';
echo $a ;

echo "<br>";

// $b='user2';

//1.empty()
if(empty($b))
{
    echo "Var is Empty1";
}
else
{
echo $b ;
}

echo "<br>";

//2.isset()

if(!isset($b))
{
    echo "Var is Empty2";
}
else
{
echo $b ;
}

//This is for if form was Submitted By either GET/POST Method
//if($_SERVER['REQUEST_METHOD']=='GET/POST')


?>