<meta charset="Utf-8">
<?php

$l = $_REQUEST['login'];
$p = $_REQUEST['password'];
$host='localhost';
$dbname='kursach';
$user='root';
$password='';
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8");

$st = $db->query('SELECT password,login FROM auth');
foreach ($st->fetchAll() as $row) 
{
	$ll = $row['login'];
    $pp = $row['password'];
}

if ($pp == $p and $ll == $l)
   require_once "index.html";
else {
   require_once "welcome.html";
};

?>