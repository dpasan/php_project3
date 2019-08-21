<?php session_start();

$d = file_get_contents('json/admin.json');
$d = json_decode($d, true);

//$id = $_POST['id'];
$em = $_POST['em'];
$pw =$_POST['pw'];

$x = array_search($em, array_column($d, 'em'));
$y = array_search($pw, array_column($d, 'pw'));


 if ($x > -1 && $y > -1 && $x === $y){
    $x = array_keys($d)[$x];
    $y = array_keys($d)[$y];
    
    //$x === $y;
    
    $_SESSION['id'] = $x;
    $_SESSION['fn'] = $d[$x]['fn'];
    
    header('location:results.php?'.$x);
}else{
    
    header('location:login.php');
};

?>
