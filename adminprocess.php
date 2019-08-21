<?php session_start();

$fn = $_POST['fn'];
$em = $_POST['em'];
$pw = $_POST['pw'];




$d = file_get_contents('json/admin.json');
$d = json_decode($d, true);

$x = count($d);
++$x;

$d[$x] = $_POST;


$d = json_encode($d);
file_put_contents('json/admin.json', $d);

$_SESSION['id'] = $x;
$_SESSION['First Name'] = $_POST['fn'];


header('location:results.php');




?>
