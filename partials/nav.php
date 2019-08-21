    <header>
        <img src="assets/img/logo.png" style="width:100%;">
    </header>
    <nav class="navbar navbar-expand-lg navbar-light p-4">
        <a class="navbar-brand" href="index.php">Youth Employment Program</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home </a>
                </li>


                <?php 
if(isset($_SESSION['fn'])){
    echo
    '<li class="nav-item p-2">
    Hello, '.$_SESSION['fn'].'!
    </li>
    <li class="nav-item">
        <a class="nav-link" href="userprofile.php">Your Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>';
} else {
    echo'
                <li class="nav-item">
                <a class="nav-link" href="jobapp.php">Job Application</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
                </li>
                 <li class="nav-item">
                <a class="nav-link" href="adminlogin.php">Admin Login</a>
                </li>
    ';
} ;
            

            
        ?>
            </ul>
        </div>
    </nav>
