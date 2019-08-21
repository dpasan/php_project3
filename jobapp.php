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
    <link href="assets/css/style.css" type="text/css" rel="stylesheet">
</head>

<body>

    <?php require_once('partials/nav.php')?>

    <div class="box">

        <form method="post" action="process.php">
            <h2>Job Application</h2>
            <p>Please fill out the application below</p>
            <div class="row">
                <div class="colunm">
                    <label>First Name</label>
                    <input class="form-control" name="fn" type="text" placeholder="First Name">
                    <br>
                    <label>Last Name</label>
                    <input class="form-control" name="ln" type="text" placeholder="Last Name">
                </div>
                <div class="colunm">
                    <label>Date Of Birth</label>
                    <input class="form-control" name="bday" type="date" placeholder="D.O.B.">
                </div>
                <div class="col">
                    <label>Home Address</label>
                    <input class="form-control" name="streetAddress" type="street" placeholder="Home Address">
                    <label>City</label>
                    <input class="form-control" name="cityAddress" type="city" placeholder="City">
                    <label>State</label>
                    <input class="form-control" name="state" type="state" placeholder="State">
                </div>
                <div class="col">
                    <label>Email</label>
                    <input class="form-control" name="em" type="email" placeholder="Email">
                    <label>Password</label>
                    <input class="form-control" name="pw" type="password" placeholder="Password">
                    <br>
                    <button>Submit</button>
                    <br>
                </div>
            </div>
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
