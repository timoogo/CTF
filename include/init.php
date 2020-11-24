<?php
//connexion à la base de donnée via PDO
$host = 'mysql:host=localhost:3306;dbname=ctf';
$login = 'root';
$password = '';
$options = array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, 
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

$pdo = new PDO($host, $login, $password, $options);


//ouverture d'une $_SESSION pour la connexion utilisateur
session_start();

define('ROOT', 'http://localhost/CTF');
?>