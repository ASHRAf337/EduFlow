<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Eduflow</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />

    <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
</head>

<body class="form">


    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Forgot Password <a href="index.php"><span class="brand-name">Eduflow
                                    Users</span></a>
                        </h1>
                        <form class="text-left" method='post'>
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="username" name="email" type="email" class="form-control"
                                        placeholder="Email">
                                </div>
                                <div class="d-sm-flex justify-content-between">

                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-lg btn-primary" value="" name='login'>Get
                                            Password</button>
                                    </div>

                                </div>

                                <div class="mt-3">
                                    <a href="index.php">wanna Login?</a>
                                </div>
                                <div class="d-sm-flex justify-content-between mt-5">
                                    <div class="field-wrapper">
                                        <button type="button" class="btn btn-lg btn-danger" value="" name=''
                                            onclick="window.location.href='../'">Back</button>
                                    </div>
                                </div>




                            </div>
                        </form>
                        <p class="terms-conditions">© 2023 All Rights Reserved. to Eduflow.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-1.js"></script>

</body>

</html>

<?php
include("config.php");
if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM faculty WHERE email = '$email' ";
	$result = mysqli_query($con, $sql);
   
	if (mysqli_num_rows($result) == 1) {
        $r = mysqli_fetch_array($result);
        include 'sendMail.php';
	} else {
		// Invalid credentials, redirect back to login page or show an error message
		echo '<script>alert("Invalid email or password"); window.location.href = "index.php";</script>';
	}

}

?>