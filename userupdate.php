<?php 
session_start();
$x = $_POST['id'];


$d = file_get_contents('json/participants.json');
$d = json_decode($d, true);


$d[$x]['em']= $_POST['em'];
$d[$x]['pw']= $_POST['pw'];


$d = json_encode($d);
file_put_contents('json/participants.json', $d);

if( $_SESSION['id'] == $x ){
  $_SESSION['name'] = $_POST['fn'];
};

header('location:userprofile.php');

?>