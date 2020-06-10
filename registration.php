<?php
include_once 'db_config.php';
if (isset($_POST['submit'])) {

//    echo 'from submission section';

    $full_name = $_POST['full_name'];
    $mobile_number = $_POST['mobile_number'];
    $email_address = $_POST['email_address'];
    $studying_class = $_POST['studying_class'];

    $student_insertion_sql = "INSERT INTO `students`(`full_name`, `mobile_number`, `email_address`, `studying_class`) VALUES ('$full_name','$mobile_number','$email_address','$studying_class')";

    $query_result = $db_connection->query($student_insertion_sql);
//    echo $query_result;

    if ($query_result == 1) {

        //Insertion Success
        header("Location: index.php?message=success");
        exit();

    } else {

        //Insertion Failure
        header("Location: registration.php?message=failure");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->

<div id="login-page">
    <div class="container">

        <form class="form-login" action="registration.php" method="post">
            <h2 class="form-login-heading">Registration</h2>
            <?php
            if (isset($_GET['message']) && $_GET['message'] == 'failure') {

                echo '            <div class="alert alert-danger"><b>Oh snap!</b> Change a few things up and try submitting again...</div>';
            }
            ?>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Full Name" name="full_name" required autofocus>
                <br>
                <input type="number" class="form-control" placeholder="Mobile Number" name="mobile_number" required>
                <br>
                <input type="email" class="form-control" placeholder="Email Address" name="email_address" required>
                <br>
                <input type="number" class="form-control" placeholder="Studying Class" name="studying_class" required>
                <br>
                <!--                <label class="checkbox">-->
                <!--		                <span class="pull-right">-->
                <!--		                    <a data-toggle="modal" href="index.php#myModal"> Forgot Password?</a>-->
                <!--		                </span>-->
                <!--                </label>-->
                <button class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock"></i> Register
                </button>
                <hr>

                <!--                <div class="login-social-link centered">-->
                <!--                    <p>or you can sign in via your social network</p>-->
                <!--                    <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>-->
                <!--                    <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>-->
                <!--                </div>-->

                <div class="registration">
                    Already have an account?<br/>
                    <a class="" href="index.php">
                        Login to your account
                    </a>
                </div>

            </div>

            <!-- Modal -->
            <!--            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal"-->
            <!--                 class="modal fade">-->
            <!--                <div class="modal-dialog">-->
            <!--                    <div class="modal-content">-->
            <!--                        <div class="modal-header">-->
            <!--                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>-->
            <!--                            <h4 class="modal-title">Forgot Password ?</h4>-->
            <!--                        </div>-->
            <!--                        <div class="modal-body">-->
            <!--                            <p>Enter your e-mail address below to reset your password.</p>-->
            <!--                            <input type="text" name="email" placeholder="Email" autocomplete="off"-->
            <!--                                   class="form-control placeholder-no-fix">-->
            <!---->
            <!--                        </div>-->
            <!--                        <div class="modal-footer">-->
            <!--                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>-->
            <!--                            <button class="btn btn-theme" type="button">Submit</button>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!-- modal -->

        </form>

    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
<script>
    $.backstretch("assets/img/login-bg.jpg", {speed: 500});
</script>

</body>
</html>