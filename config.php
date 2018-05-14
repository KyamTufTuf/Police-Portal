<?php
$username = "root"; // username
$password = ""; // password of the database
$hostname = "127.0.0.1"; // host of the database
$namebase = "vrpfx"; // name of the database























// Attempt to connect to the database
try
 {
  $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
 }
  catch (Exception $e)
 {
  // If an error is thrown, display the message
  die('Erreur : ' . $e->getMessage());
 }
 ?>
