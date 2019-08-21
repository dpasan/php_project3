<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>

    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
    <link href="css/style.css" type="text/css">
</head>

<body>

    <?php require_once('partials/nav.php')?>

    <div>
        <h2>Job Application</h2>
    </div>

    <div class="box">

        <div>
            <h3>Please fill out the application below</h3>
        </div>

        <form method="post" action="adminprocess.php">

            <div class="form-row">

                <div class="col-md-4 mb-3" id="in">
                    <label>First Name</label>
                    <input class="form-control" name="fn" type="text" placeholder="First Name">
                </div>

            </div>

            <div class="form-row">

                <div class="col-md-3 mb-3">
                    <label>Email</label>
                    <input class="form-control" name="em" type="email" placeholder="Email">
                </div>

                <div class="col-md-3 mb-3">
                    <label>Password</label>
                    <input class="form-control" name="pw" type="password" placeholder="Password">
                </div>

            </div>

            <br>
            <input type="submit" value="submit" class="btn btn-primary">
            <br>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
