<?php
require_once('includes/db_con.php');

if (isset($_POST['patient'])) {
    $first_name = $_POST['fname'];
    $surname = $_POST['surname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $city = $_POST['city'];

    //sql statement to insert into table
    $sql = "INSERT INTO patients(firstname,surname,phone,
    email,password,city) VALUES(?,?,?,?,?,?)";

    $stmt = mysqli_stmt_init($DB_connect);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,'ssssss',$first_name,$surname,$phone,
    $email,$password,$city);

    if (mysqli_stmt_execute($stmt)) {
        header('Location:dashboard.php');
    }
    else {
        echo 'Something went wrong';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primecare | Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/bootstrap.min.js" defer></script>
</head>
<body>
    <?php include('modules/nav.php'); ?>

    <div class="container">
        <div class="card card-custom">
            <div class="card-header">
                <h3>Register as a patient</h3>
            </div>
            <div class="card-body">
                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="fname" placeholder="first name">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="surname" placeholder="surname">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone number">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="email address">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="city" placeholder="Your current city">
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="patient" class="btn btn-primary btn-lg">
                            Create account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
    
    </footer>
</body>
</html>