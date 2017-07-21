<?php
//Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = 'narayan';
$dbName = '*****';

//Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if($db->connect_errno):
    die('Connect error:'.$db->connect_error);
endif;
?>