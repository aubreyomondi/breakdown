<?php
require_once 'ensureLogin.php';
require_once 'connection.php';
// Define variables and initialize with empty values
$User_Name=$_SESSION['username'];
$username="";
$password = "";
$password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate password
    if(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    // Check input errors before inserting in database
    if (empty($password_err)){
// Prepare an update statement
        $sql = "UPDATE users SET  username=?, password=? WHERE username=?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_password,$param_User_Name);

                        // Set parameters  
            $param_username= trim($_POST['username']);          
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash 
            $param_User_Name= $User_Name;
            


            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                // Redirect to login page
                header("location: logout.php");
            } else{
                echo nl2br("\r\n Something went wrong. Please try again later.");
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>M-agriculture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />
    
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
       .wrapper{text-align: center;}
        p{ font: 14px sans-serif; text-align: center;}
        body{background-image:url(images/Galler.jpg); background-size: cover;}
    </style>
</head>
<body>
    <div class="gtco-loader"></div>
    <div id="page">
        <div class="page-inner" style="opacity:0.7; padding-top:120px; padding-bottom: 12%;">
            <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="index.html" style="color: black;">M-Agriculture <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="features.php" style="color:black;">About us</a></li>
                        <li><a href="tour.php" style="color: black;">Projects</a></li>
                        <li class="has-dropdown">
                            <a href="#" style="color: black;">Services</a>
                            <ul class="dropdown">
                                <li><a href="#">Market</a></li>
                                <li><a href="#">SACCO</a></li>
                            </ul>
                        </li>
                        <li><a href="pricing.php" style="color: black;">Pricing</a></li>
                        <li><a href="contact.php" style="color: black;">Contact</a></li>
                        <li class="btn-cta" class="has-dropdown">
                            <a href="userprofile.php"><span style="color: red;"><b><?php echo htmlspecialchars($_SESSION['username']); ?></b></span></a>                       
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>

    <div class="wrapper">
        <p>Please fill this form to update your profile.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">  

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
            </div>   

            <div class="form-group <?php echo $password_err ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Update User Details">
            </div>
        </form>
    </div>    

    <p><a href="deleteuser.php" class="btn btn-danger">Delete Account</a></p>
    <p><a href="logout.php" class="btn btn-danger">Logout</a></p>  

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    </div>
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>
</html>