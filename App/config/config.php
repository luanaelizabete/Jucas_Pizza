<?php
// ip:porta, nome do bd, login e senha
$base="http://localhost/Jucas_Pizza/app/";
$db_host = "SG-jucaspizzas-10024-mysql-master.servers.mongodirector.com";
$db_port = 3306;
$db_name = "jucaspizzas";
$db_user = "sgroot";
$db_pwd = "1Qk15Ypolw&Yeeac";
 
$pdo = new PDO("mysql:host=".$db_host.";port=".$db_port.";dbname=".$db_name, $db_user, $db_pwd);

?>