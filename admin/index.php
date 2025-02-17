<?php 


include 'layouts/essentials.php'; 
include 'layouts/config.php';

session_start();
if ((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']== true)) {
    header('Location: dashboard.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <?php include 'layouts/link.php' ?>
    <style>
        .form-login {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">


    <div class="form-login text-center bg-white rounded shadow overflow-none">
        <form method="POST">
            <h4 class="fw-bold bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input type="text" name="admin_name" class="form-control shadow-none text-center" placeholder="Username Admin">
                </div>
                <div class="mb-4">
                    <input type="password" name="admin_pass" class="form-control shadow-none text-center" placeholder="Password Admin">
                </div>
                <button name="login" type="submit" class="btn btn-custom text-white">LOGIN</button>
            </div>
        </form>
    </div>

    <?php

    if (isset($_POST['login'])) {
        $filterinput = filteration($_POST);

        $query = "SELECT * FROM  `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
        $values = [$filterinput['admin_name'], $filterinput['admin_pass']];

        $res = select($query, $values, "ss");
        if ($res->num_rows == 1) {
            $tampung = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $tampung['sr_no'];
            header("location:dashboard.php");
        } else {
            alert('error', 'Login Failed - Invalid Credentials!');
        }
    }


    ?>

    <?php include 'layouts/scripts.php' ?>
</body>

</html>