<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
    //$file = file_get_contents("https://getdemo.in/mas_solutions/mailers/welcome-company.html", "r");
    $file = file_get_contents($root."/mailers/alert-mail.html", "r");
    $file = str_replace("#companyProfileName",$CompanyProfile,$file);
    echo $file;

 ?>
