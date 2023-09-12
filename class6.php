<?php

    //Get thumbnails from video url
    function get_thumbnail($video_url)
    {
        $video_array = explode('?',$video_url);
        $video_id = explode('/',$video_array[0]);
        $thumbnail_id = end($video_id);
        echo "<img src='https://i.ytimg.com/vi/$thumbnail_id/hq720.jpg'>";
        echo "<br>";
    }
    get_thumbnail("https://youtu.be/tBbdSzwxqyY?si=VB9UIEVGlGcJIyam");
    echo "<br>";
    get_thumbnail("https://youtu.be/LPCZG8zxID8?si=u1DwiFifmkSrv089");
    echo "<br>";
    get_thumbnail("https://youtu.be/R_agd5qZ26Y?si=YjpWdusjJ1_5Vpgo");


    echo "<br>";
    echo "<br>";

    //Array intersect

    $Sama =[
        'id' => 1,
        'name' => "Sama Uddin Ersj",
        'Department' => "CSE",
        'University' =>"East Delta University",
    ];
    $User2 =[
        'id' => 2,
        'name' => "Arafat",
        'Department' => "CSE",
        'University' =>"East Delta University",
    ];
    echo "<pre>";
    print_r(array_intersect($Sama,$User2));
    echo "</pre>";

    echo "<br>";
    echo "<br>";
 
    //Array Random Use case

    $question = ['q1','q2','q3','q4','q5','q6','q7','q8'];
    echo $question[array_rand($question)];
    echo "<br>";
    echo "<br>";

    //Array in_array use

    var_dump(in_array('q1',$question));
    echo "<br>";
    echo "<br>";

    //in_array example

    $ext = "file.jpg"; 
    $extention = explode(".",$ext);

    $acceptance = ['svg', 'png', 'jpg', 'jpeg'];

    if(in_array(end($extention),$acceptance)){
        echo "Accepted";
    }else{
        echo "Not Accepted";
    }

    echo "<br>";
    echo "<br>";

    //Array search

    $arr = [1,2,3,4,5,6,7,8,9,10];
    $key = 11;
    if(array_search($key,$arr)){
        echo "Found";
    }else{
        echo "Not Found";
    }
    echo "<br>";
    var_dump(array_search(10,$arr));
    
    echo "<br>";
    echo "<br>";

    //Array filter

    $arr = [1,2,3,4,5,6,7,8,9,10];
    $great = array_filter($arr, function($mark){
        return $mark>5; 
    });
    echo "<pre>";
    print_r($great);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    //Array Sort

    $name2 =[
        'Karim',
        'Ahmad',
        'Mohamed',
        'jamil',
    ];
    sort($name2);
    echo "<pre>";
    print_r($name2);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    rsort($name2);
    echo "<pre>";
    print_r($name2);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    $name3 =[
        'a' =>'Karim',
        'd' =>'Ahmad',
        'b' =>'Mohamed',
        'c' =>'jamil',
    ];
    asort($name3);
    echo "<pre>";
    print_r($name3);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    $name3 =[
        'a' =>"Karim",
        'd' =>"Ahmad",
        'b' =>"Mohamed",
        'c' =>"jamil",
    ];
    arsort($name3);
    echo "<pre>";
    print_r($name3);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    $name3 =[
        'a' =>"Karim",
        'd' =>"Ahmad",
        'b' =>"Mohamed",
        'c' =>"jamil",
    ];
    ksort($name3);
    echo "<pre>";
    print_r($name3);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    krsort($name3);
    echo "<pre>";
    print_r($name3);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    //Array slice
    $name5 =[
        'Karim',
        'Ahmad',
        'Mohamed',
        'jamil',
    ];
    $up_name = array_slice($name5,0,3);
    echo "<pre>";
    print_r($up_name);
    echo "</pre>";
    echo "<br>";
    echo "<br>";

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Day form create</title>
    </head>
    <body>
        <h1>DAY LIST : </h1>
     <select name="" id="">
        <?php
            for($i=1; $i<=31;$i++){
                echo "<option>$i</option>";
            }
        ?>
     </select>
    </body>
    </html>