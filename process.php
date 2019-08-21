<?php session_start();

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$bday = $_POST['bday'];
$streetAddress = $_POST['streetAddress'];
$cityAddress = $_POST['cityAddress'];
$state = $_POST['state'];
$em = $_POST['em'];
$pw = $_POST['pw'];

//echo $fn ."</br>";
//echo $ln ."</br>";
//echo $bday ."</br>";
//echo $streetAddress ."</br>";
//echo $cityAddress ."</br>";
//echo $state ."</br>";
//echo $em ."</br>";
//echo $pw ."</br>";



$d = file_get_contents('json/participants.json');
$d = json_decode($d, true);

$x = count($d);
++$x;

$d[$x] = $_POST;


$d = json_encode($d);
file_put_contents('json/participants.json', $d);

$_SESSION['id'] = $x;
$_SESSION['First Name'] = $_POST['fn'];


header('location:userprofile.php');




?>
