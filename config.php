<?php

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

define( 
    "CONFIG", [
        "BASEDIR"           => str_replace('\\', '/', dirname(__FILE__)),
        "BASEURL"           => "http://localhost:8080",
        "BASEFOLDER"        => "", # /folder
        "BASECONTROLLER"    => "Home", 
        "BASEMETHOD"        => "Index",
        "BASEPARAMS"        => [],

        "DBDRIVER"          => "mysql",
        "DBHOST"            => "162.241.203.51",
        "DBPORT"            => "3306",
        "DBNAME"            => "",
        "DBUSER"            => "",
        "DBPASSWORD"        => "",
        "DBOPTIONS"         => [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_CASE => PDO::CASE_NATURAL,
            PDO::ATTR_EMULATE_PREPARES => false
        ],

        "MAILERHOST"          => "",
        "MAILERSMTPAUTH"      => true,
        "MAILERUSER"          => "",
        "MAILERPASSWORD"      => "",
        "MAILERSMTPSECURE"    => "tsl", // ssl
        "MAILERPORT"          => 587, // 465,
        "MAILERACCOUNT"       => "",  
        "MAILERACCOUNTNAME"   => "",
        "MAILERSUBJECT"       => "",
    ]    
);


?>