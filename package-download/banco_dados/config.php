<?php

    $db_name='curso_php';
    $db_host='localhost';
    $db_user='root';
    $db_pass='';
    
    $pdo = new PDO("mysql:dbname=".$db_name."; host=".$db_host, $db_user, $db_pass);

    //METODO ORIGINAL
    //$pdo = new PDO("mysql:dbname=curso_php; host=localhost", "root", "");
?>