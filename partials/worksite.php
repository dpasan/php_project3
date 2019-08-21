<div class="row">
    <div class="card text-center col-sm-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Worksites</h5>
            <p class="card-text">Pick one of the following worksites below:</p>
            <form method="post" action="work.php">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <label><input type="radio" name="workSite" value="Worksite A">Worksite A<br></label>
                <br>
                <label><input type="radio" name="workSite" value="Worksite B">Worksite B<br></label>
                <br>
                <label><input type="radio" name="workSite" value="Worksite C">Worksite C<br></label>
                <br>
                <label><input type="radio" name="workSite" value="Worksite D">Worksite D<br></label>
                <br>
                <br>
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </div>
    <br>

  <?php
    //$id = $_SERVER['QUERY_STRING'];

    //$id = $_SESSION['id'];

    $d = file_get_contents("json/participants.json");
    $d = json_decode($d, true);

    
$current = $d[$id]['currentworksite'];

        if(empty($current)){
            $na = 'N/A';
        } else {
            $na = $current;
        };

?>

    <div class="card text-center col-sm-4" style="width: 18rem;">
        <div class="card-body">
        <h5 class="card-title">Current Worksite</h5>
        <p class="card-text">
            <?php echo $na; ?>
        </p>
        </div>
    </div>
    <br>

    <div class="card text-center col-sm-4" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Past Worksite</h5>
            <p class="card-text">
                <?php
                $past = $d[$id]['pastworksite'];

                if(empty($past)){
                    echo " N/A";
                } else {
                    foreach($past as $k => $v){
                        echo $v.'<br>';
                    };
                };
                ?>
            </p>
        </div>
    </div>

</div>