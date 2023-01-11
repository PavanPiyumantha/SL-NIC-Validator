<?php
    if(isset($_REQUEST['check_nic'])){
        $nic = $_POST['nic'];
        if(empty($nic))
        {
            header('location:index.php?empty');
        }
        else
        {
            if( preg_match('/^([0-9]{9}[x|X|v|V]|[0-9]{12})$/',$nic))
            {
                header('location:index.php?valid');
            }
            else
            {
                header('location:index.php?invalid');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>NIC Validator</title>
</head>
<body>
    <div class="title">
    <img src="img/logo.png" height="60px">
    <h1>Sri Lankan NIC Validaor</h1>
    </div>
    <div class="container">
        <form method="post">
        <div class="card text-center col-6 col-sm-6">
            <div class="card-header">
            <?php
                if(isset($_GET['empty'])){
                echo '<div class="alert alert-info col-12" role="alert">
                    Please Enter NIC Number!!
                    </div>';
                }
                if(isset($_GET['valid'])){
                echo '<div class="alert alert-success col-12" role="alert">
                    Valid NIC Number!!
                </div>';
                }
                if(isset($_GET['invalid'])){
                echo '<div class="alert alert-danger col-12" role="alert">
                    Invalid NIC Number!!
                </div>';
                }
                ?>
            </div>
            <div class="card-body">
                <h5 class="card-title">Check Your NIC Number</h5>
                <div>
                    <input type="text" class="form-control mt-3" name="nic" placeholder="Enter NIC number">
                </div>
                <div>
                    <button class="btn btn-success mt-3" type="submit" name="check_nic">Check</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>