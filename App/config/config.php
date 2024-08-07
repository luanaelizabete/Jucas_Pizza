<?php
// ip:porta, nome do bd, login e senha
$db_host = "localhost";
$db_port = 3310;
$db_name = "JucasPizzas";
$db_user = "lua_elliza";
$db_pwd = "6sews48hgl";
 
$pdo = new PDO("mysql:host=".$db_host.";port=".$db_port.";dbname=".$db_name, $db_user, $db_pwd);