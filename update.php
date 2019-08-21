<?php session_start();
$x = $_POST['id'];


$d = file_get_contents('json/participants.json');
$d = json_decode($d, true);

$d[$x]['fn']= $_POST['fn'];
$d[$x]['ln']= $_POST['ln'];
$d[$x]['bday']= $_POST['bday'];
$d[$x]['streetAddress']= $_POST['streetAddress'];
$d[$x]['cityAddress']= $_POST['cityAddress'];
$d[$x]['state']= $_POST['state'];
$d[$x]['em']= $_POST['em'];
$d[$x]['pw']= $_POST['pw'];




$d = json_encode($d);
file_put_contents('json/participants.json', $d);

if( $_SESSION['id'] == $x ){
    $_SESSION['name'] = $_POST['fn'];
};

header('location:results.php');

?>