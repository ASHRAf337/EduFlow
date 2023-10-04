<?php
        include("session.php");
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Eduflow </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
    .layout-px-spacing {
        min-height: calc(100vh - 166px) !important;
    }
    </style>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <?php
        include("header.php");
    ?>


    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>


        <?php
        include("sidebar.php");
    ?>

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">
                    <div class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Add Polls</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">

                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" class="was-validated">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label for="e-text" class="sr-only">Question</label>
                                                        <input id="e-text" type="text" name="question"
                                                            placeholder="Question" class="form-control" required="">
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="e-text" class="sr-only">Option 1</label>
                                                        <input id="e-text" type="text" name="opt1"
                                                            placeholder="Option 1" class="form-control" required="">
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="e-text" class="sr-only">Option 2</label>
                                                        <input id="e-text" type="text" name="opt2"
                                                            placeholder="Option 2" class="form-control" required="">
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="e-text" class="sr-only">Option 3</label>
                                                        <input id="e-text" type="text" name="opt3"
                                                            placeholder="Option 3" class="form-control" required="">
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="e-text" class="sr-only">Option 4</label>
                                                        <input id="e-text" type="text" name="opt4"
                                                            placeholder="Option 4" class="form-control" required="">
                                                    </div>

                                                </div>
                                                <input type="submit" name="add" value="Add"
                                                    class="mt-4 btn btn-primary">
                                            </div>

                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2023 <a target="_blank">Eduflow</a>, All
                        rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                            </path>
                        </svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
    $(document).ready(function() {
        App.init();
        $('#table').DataTable();
    });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

</html>
<?php

if(isset($_POST['add']))
{
	$question = $_POST['question'];
	$opt1 = $_POST['opt1'];
	$opt2 = $_POST['opt2'];
	$opt3 = $_POST['opt3'];
	$opt4 = $_POST['opt4'];



    if(mysqli_query($con,"INSERT INTO `poll`(`question`, `opt1`, `opt2`,`opt3`,`opt4`) VALUES ('$question','$opt1','$opt2','$opt3','$opt4')"))
    {
        echo '<script>alert("Added Successfully..!!"); window.location.href = "opolls.php";</script>';
    }
    else
    {
        echo '<script>alert("Failed..!!"); window.location.href = "opolls.php";</script>';
    }

	

}

?>