<?php
    
    //'Hello world' print using var_dump
    var_dump('Hello world');
    echo '<br>';
    
    //Upper case letters
    echo strtoupper('hello world');
    echo '<br>';
    
    //Lower case letters
    echo strtolower('HELLO WORLD');
    echo '<br>';
    
    //Upper case first letter
    echo ucfirst('hello world');
    echo '<br>';
    
    //Lower case first letter
    echo lcfirst('HELLO WORLD');
    echo '<br>';

    //Simple if else conditionwise logic
    function p($name){
    if (ctype_alpha($name)){
        echo 'Valid text';
    }else {
        echo 'Invalid text';
    }
    }
    p('123');

    //Greater than or less than check

    $e= 100;
    $f= 20;
    $g=30; 

    if($e > $f && $e > $g){
        echo "e is greater than f & g";
    }elseif($f > $e && $f > $g){
        echo "f is greater than e & g";
    }else {
        echo "g is the largst";
    }

    echo "<br>";

    //Switch case use

    $fav_subject='ICT';

    switch($fav_subject){
        case'Math':
            echo "Math is my favorite subject";
            break;
        case 'Bengali':
            echo "Bengali is my favorite subject";
            break;
        case 'Literature':
            echo "Green is my favorite subject";
            break;
        default:
            echo "There are no subjects available which I like";
            break;
    }

    echo "<br>";

    //Array uses
    //Index array

    $student= ["Sama Uddin Eraj",23,"Kazir_dewry","Chattogram"];
    echo '<pre>';
    print_r($student);
    echo '</pre>';

    echo "<br>";

    var_dump($student);
    echo '<br>';
    echo $student[0];

    //Assosiative array

    $student1 =[
    'name' => "Sama Uddin Eraj",
    'age' => 23,
    'class' => "Kazir_dewry",
    'city' => "Chattogram",
    ];
    
    echo '<pre'>
    print_r($student1);
    '</pre>';
    echo '<br>'; 
    echo $student1['city'];

    echo '<br>';
    echo'<br>';

    

?>