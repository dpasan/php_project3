<?php session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>NYC SYEP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">

</head>

<body>

    <?php require_once('partials/adminnav.php')?>

    <div class="box">
        <div class="table-cta">
            <h1>All Applicants</h1>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Age</th>
                    <th scope="col">Home Address</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type</th>
                    <th scope="col">Worksite</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <?php
$d=file_get_contents("json/participants.json");
$d = json_decode($d, true);

    
    foreach( $d as $k => $v ){

        $dateOfBirth = new DateTime($v["bday"]);
        $now = new DateTime();
        $difference = $now->diff($dateOfBirth);
        $age = $difference->y;

    if (($age >= 16) && ($age <= 21)){
        $type ="OY";

    } else if (($age == 14) || ($age == 15)){
        $type = "YY";
    } else {
        $type = "Does Not Qualify";

    };

    if(empty($v['currentworksite'])){
        $na = "N/A";
    } else {
        $na = $v['currentworksite'];
    };
        
        
        echo '
        <tbody>
        <tr>
        <td>'.$v['ln'].'</td>
        <td>'.$v['fn'].'</td>
        <td>'.$v['bday'].'</td>
        <td>'.$age.'</td>
        <td>'.$v['streetAddress'].'</td>
        <td>'.$v['cityAddress'].'</td>
        <td>'.$v['state'].'</td>
        <td>'.$v['em'].'</td>
        <td>'.$type.'</td>
        <td>'.$na.'</td>
        <td>
        <a href="view.php?'.$k.'" class="btn btn-sm btn-outline-primary">View</a> 
        <a href="#" class="btn btn-sm btn-outline-danger">Delete</a> 
        </td>
        </tr>
        </tbody>
        ';
    }
      ?>
        </table>
    </div>
    </div>
    
    <?php require_once('partials/footer.php');?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
