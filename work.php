<?php
session_start();

$x = $_POST['id'];
$y = $_POST['workSite'];


$d = file_get_contents('json/participants.json');
$d = json_decode($d, true);


if (isset($d[$x]['currentworksite']) ){
    array_push($d[$x]['pastworksite'], $d[$x]['currentworksite']);

} else{
    $d[$x]['pastworksite'] = [];
}
    $d[$x]['currentworksite'] = $y;


$d = json_encode($d);
file_put_contents('json/participants.json', $d);

header('location:results.php');
?>
