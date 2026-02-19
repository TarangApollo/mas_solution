<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
    //$file = file_get_contents("https://getdemo.in/mas_solutions/mailers/welcome-company.html", "r");
    $file = file_get_contents($root."/mailers/attatchmentMail.html", "r");

    echo $file;

 ?>
