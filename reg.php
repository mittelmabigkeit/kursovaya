<meta charset="Utf-8">
<?php

$host='localhost';
$dbname='kursach';
$user='root';
$password='';
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8");


if (isset($_POST['login'])) { $login = $_POST['login'];}
if (isset($_POST['password'])) { $password = $_POST['password'];}
    $result2 = $db->query("INSERT INTO auth (login,password) VALUES ('$login','$password')");
    require_once "index.html";
?>