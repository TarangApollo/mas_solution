<?php

	$root = $_SERVER['DOCUMENT_ROOT'];
    //$file = file_get_contents("https://getdemo.in/mas_solutions/mailers/welcome-company.html", "r");
    $file = file_get_contents($root."/mailers/welcome-company.html", "r");
    $file = str_replace("#email",$user['email'] ,$file);
    $file = str_replace("#password",$password,$file);
    $name = $user['first_name'];
    if(trim($user['last_name']) != '')
    {
        $name =  $name . ' ' .trim($user['last_name']);
    }
    $file = str_replace("#name",$name,$file);
    $file = str_replace("#companyName",$Company,$file);

    echo $file;

 ?>
