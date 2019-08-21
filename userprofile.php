<?php session_start();?>
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

    <style>
        footer {
            box-sizing: border-box;
            padding: 30px;
        }

        footer,
        .fa,
        span {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            justify-content: center;
        }

        footer p {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            justify-content: center;

        }

    </style>
</head>

<body>

    <?php require_once('partials/nav.php')?>

    <div class="box">
        <form method="post" action="userupdate.php">
            <h2>Your Profile</h2>
            <p>Please note: you can only edit your email address &amp; password. If you need to make any other changes please contact the admin.</p>

            <?php 

    $id = $_SESSION['id'];


    $d = file_get_contents("json/participants.json");
    $d = json_decode($d, true);

    $f = $d[$id]['fn'];
    $l = $d[$id]['ln'];
    $bD = $d[$id]['bday'];
    $sA = $d[$id]['streetAddress'];
    $c = $d[$id]['cityAddress'];
    $s = $d[$id]['state'];
    $e = $d[$id]['em'];
    $p = $d[$id]['pw'];

    $dateOfBirth = new DateTime($d[$id]["bday"]);
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

    $current = $d[$id]['currentworksite'];

    if(empty($current)){
        $na = "N/A";
    } else {
        $na = $current;
    };
    
?>

 <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>Type of Participant:</label> <br>
                    <?php echo $type;?>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Your Worksite:</label><br>
                    <?php echo $na; ?>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>Your First Name:</label> <br>
                    <?php echo $f; ?>
                </div>

                <div class="col-md-4 mb-3">
                    <label>Your Last Name:</label>
                    <br>
                    <?php echo $l; ?>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>Your D.O.B:</label>
                    <br>
                    <?php echo $bD;?>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Age:</label> <br>
                    <?php echo $age;?>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>Your Home Address:</label>
                    <br>
                    <?php echo $sA; ?>
                </div>
                <div class="col-md-4 mb-3">
                    <label>City:</label>
                    <br>
                    <?php echo $c; ?>
                </div>
                <div class="col-md-4 mb-3"><label>State</label>
                    <br>
                    <?php echo $s; ?>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label>Your Email</label>
                    <br>
                    <input class="form-control" name="em" type="email" value="<?php echo $e; ?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label>Your Password</label>
                    <br>
                    <input class="form-control" name="pw" type="password" value="<?php echo $p; ?>">
                </div>
            </div>
            <br>

            <input type="submit" value="Update Now" class="btn btn-primary">
            <br>

        </form>
    </div>
    <?php require_once('partials/footer.php');?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
