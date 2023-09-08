<?php

//Nested arrray

  $student2 = [
    'user1' =>[
    'id' => 1,
    'name' => "Sama Uddin Eraj",
    'age' => 23,
    'class' => "Kazir_dewry",
    'city' => "Chattogram",
    'social-media' => [
        'facebook' => 'www.facebook.com',
        'instagram' => 'www.instagram.com',
        'linkedin' => 'www.linkedin.com']
    ],
    'user2' =>[
    'id' => 2,
    'name' => "Sama Uddin Eraj",
    'age' => 23,
    'class' => "Kazir_dewry",
    'city' => "Chattogram"],

  ];
  echo '<pre>';
  print_r($student2['user1']['name']);
  echo '</pre>';

  echo '<br>';
  echo '<br>';

  //Upper to lower, lower to upper case,reverse

  $user1 =[
    'name' =>"nahIaat",
    'age' => 23,
    'class' => "Kazir_dewry",
    'city' => "Chattogram",
  ];
  $user3= "Hello World";
  echo strtoupper ($user1['name']);
  echo '<br>';
  echo strtolower($user1['name']);
  echo '<br>';
  echo ucfirst($user1['name']);
  echo '<br>';
  echo strrev($user1['name']);
  echo '<br>';
  //strpos 
  echo strpos($user3,'Hello');
  echo '<br>';
  var_dump(stripos($user3,'world')) ; //Case sensitive
  echo '<br>';

  ///URL make & white space replace with hyphen
  echo strtolower(str_replace(' ','-',$user3));
  echo '<br>';

   ///substring use
  $text= "The present age is the age of information technology, the modern age. We can see the touch of modernity everywhere now. We don't have to go to the market any more to market like all other fields. In the magic of the internet";

  $title = substr($text,0,30).'...<a href="#">Read More</a>';
  echo $title;
  echo '<br>';

  //Trim
  $text3 ="               mafuz@gmail.com";
  $text2 = trim($text3);
  var_dump($text2);
  echo '<br>';
  echo strlen($text2);
  echo '<br>';
  echo '<br>';

  ///Password secure through encryption using sha1 & md5

  $User_password = 'Bangladesh';
  echo sha1($User_password); //one way weak pass
  echo '<br>';
  echo md5($User_password); //one way weak pass
  echo '<br>';
  echo password_hash($User_password,PASSWORD_BCRYPT);
  echo '<br>';
  $db_password = password_hash($User_password,PASSWORD_BCRYPT);
  echo '<br>';
  var_dump (password_verify($User_password,$db_password));
  
  ?>