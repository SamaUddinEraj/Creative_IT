<?php
    
    //String  Functions //HTML Entities
    
    $title = "<script>alert()</script>";
    echo htmlentities($title);
    echo "<br>";

    //Example
    $name1 = "<h1>SAMA UDDIN ERAJ</h1>";
    echo ($name1);
    echo "<br>";
    $name2 = "<h1>SAMA UDDIN ERAJ</h1>";
    echo htmlentities($name2);
    echo "<br>";
    //HTML Special characters used for preventing attacks
    echo htmlspecialchars($name2);
    echo "<br>";
    echo "<br>";

    //HTML Entities Decode

    $title = "<script>alert()</script>";
    $title2 = htmlentities($title);
    //echo html_entity_decode($title2);
    echo "<br>";
    echo "<br>";

    //STR_Repeat use case:

    $str = "Enter your email :";
    echo $str;
    echo "<br>";
    $str1 = "Enter your Password : ";
    echo $str1;
    echo str_repeat("*", 5);
    echo "<br>";
    echo "<br>";

    //Explode case use

    $nam = "Creative IT Institute :";
    echo $nam;
    echo "<br>";
    var_dump(explode(" ", $nam));
    echo "<br>";
    echo '<pre>'; 
    print_r(explode(" ", $nam));
    '</pre>';
    echo "<br>";
    //Using text
    $name3 = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique reiciendis provident, molestiae quibusdam cupiditate dolore voluptas assumenda officiis sunt quo";
    echo '<pre>'; 
    print_r(explode(",", $name3));
    '</pre>';
    echo "<br>";
    echo "<br>";

    //PNG Explode example
    $text ="Pic.jpg.png.mp3";
    $text1= explode(".", $text);

    if(end($text1) == "png") {   //end tag is used for checking the last extention
        echo "Please click the save button";
    }else {
        echo "Please fill the requirements";
    }
    echo "<br>";
    echo "<br>";
   
    //Implode use

    $name5 = ["Sama","Uddin","Eraj"];
    echo implode(" ", $name5);
    echo "<br>";

    // COUNT USE
    $name6 = ["Sama","Uddin","Eraj"];
    echo count ($name6);

    echo "<br>";

    //COUNT EXAMPLE

    $arr1 = [

        [
            'id' => 1 ,
            'name' => "Sama_uddin_eraj",
            'roll' => "10",
        ],
        [
            'id' => 2 ,
            'name' => "Sama_uddin_eraj_clone",
            'roll' => "10.1",
        ],
        [
            'id' => 3 ,
            'name' => "Sama_uddin_eraj_junior",
            'roll' => "10.2",
        ],
        [
            'id' => 4 ,
            'name' => "Sama_uddin_eraj_promax",
            'roll' => "10.3",
        ],
        [
            'id' => 5 ,
            'name' => "Sama_uddin_eraj_promax",
            'roll' => "10.3",
        ],


    ];
    echo '<pre>';
    echo count($arr1);
    '</pre>';

    if(count($arr1)>5){
        echo 'Too many data to handle';
    }else{
        echo ''.': Valid data';
    }

    echo "<br>";
    echo "<br>";

    //Array Push

    $Arpush = ["Airtel","GP","Banglalink"];
    array_push($Arpush,"Teletalk","Citycell");
    echo '<pre>';
     print_r($Arpush);
    '</pre>';
    
    echo "<br>";
    echo "<br>";

    //Array Unshift // Add elements on the 1st index

    $Arunshift = ["Banglalink","Airtel","GP"];
    array_unshift($Arunshift,"Teletalk","Citycell");
    echo '<pre>';
     print_r($Arunshift);
    '</pre>';
    
    echo "<br>";
    echo "<br>";


    //Array Pop
    $Arpop = ["Airtel","GP","Banglalink"];
    array_pop($Arpop);
    echo '<pre>';
     print_r($Arpop);
    '</pre>';
    
    echo "<br>";
    echo "<br>";

    //Array Shift // Doing pop from the 1st element
    $Arshift = ["Airtel","GP","Banglalink"];
    array_shift($Arshift);
    echo '<pre>';
     print_r($Arshift);
    '</pre>';
    
    echo "<br>";
    echo "<br>";

    //Array Reverse

    $Ar_normal = ["Airtel","GP","Banglalink"];
    echo '<pre>';
     print_r($Ar_normal);
    '</pre>';
    echo "<br>";

    //New array return without changing the existing

    $Ar_reverse = array_reverse($Ar_normal); 
    echo '<pre>';
     print_r($Ar_reverse);
    '</pre>';
    
    echo "<br>";
    echo "<br>";

    //Array Difference

    $User =[
        'id' => 01 ,
        'name' =>"xyz",
        'number' => "01234",

    ];
    $User2 =[
        'id' => 02 ,
        'name' =>"xyz",
        'number' => "012678",    
    ];
    echo '<pre>';
    print_r(array_diff($User,$User2));
    '</pre>';

    echo "<br>";
    echo "<br>";

    //empty tag use

    $etext = '    1';
    var_dump(empty(trim($etext)));
    echo "<br>";
    echo "<br>";
    
    if(empty(trim($etext))){
        echo 'Please fill the required field';
    }else{
        echo 'proceed';
    }
    echo "<br>";
    echo "<br>";

    //isset use case
    $etext2 ;
    var_dump(isset($etext2));
    echo "<br>";
    echo "<br>";



?>

<input type="file">
