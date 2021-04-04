<?php
// Include connection file
require_once 'connection.php';
 
// Define variables and initialize with empty values
$username = "";
$usertype = "";
$password = "";
$confirm_password = "";
$username_err = "";
$usertype_err = "";
$password_err = "";
$confirm_password_err = "";
 
// Processing form data when form is submitted
//if($_SERVER["REQUEST_METHOD"] == $signUp){

	if ( isset( $_POST['signUp'] ) ) {
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT userId FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Validate usertype
    if(empty(trim($_POST['usertype']))){
        $usertype_err = "Please enter a usertype.";     
    } else{
        $usertype = trim($_POST['usertype']);
    }    
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($usertype_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (userId, username, email, password, UserType) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "dssss", $param_userId, $param_username, $param_email, $param_password, $param_UserType);
            
            // Set parameters
            $param_userId= null;
            $param_username = $username;
            $param_email= null; 
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_UserType= $usertype;
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                // Redirect to login page
                header("location: index.php");

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
elseif ( isset( $_POST['login'] ) ) {
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password, UserType FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password, $UserType);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            /* Password is correct, so start a new session and
                            save the username to the session */

                    if (strcmp("Administrator", $UserType)==0) {
                        # Open Super Admin page
                            session_start();
                            $_SESSION['username'] = $username;
                            header("location: ../admin/indexTT.php");
                            }elseif (strcmp("Breakdown", $UserType)==0) {# Open Breakdown service page
                            session_start();
                            $_SESSION['username'] = $username;
                            header("location: ../breakdownService.php");
                            }else{# Open User page
                            session_start();
                            $_SESSION['username'] = $username;
                            header("location: ../breakdown.php");
                            }

                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=ed\ge">
    <title>Breakdown Services Locator</title>
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

    </head>
    <body>
        
    <div class="gtco-loader"></div>
    
    <div id="page">

    
    <div class="page-inner">
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="../index.html">BREAKDOWN SERVICE <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="../about.html">About</a></li>
                        <li><a href="../breakdown.php">Breakdown</a></li>
                        <li><a href="../contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>
    
    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/banner2.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    

                    <div class="row row-mt-15em">
                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <span class="intro-text-small">Welcome to </span>
                            <h1>Breakdown Services <br> Locator</h1>  
                        </div>
                        <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <div class="form-wrap">
                                <div class="tab">
                                    <ul class="tab-menu">
                                        <li class="active gtco-first"><a href="#" data-tab="signup">Sign up</a></li>
                                        <li class="gtco-second"><a href="#" data-tab="login">Login</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-content-inner active" data-content="signup">
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                                <div class="row form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                                    <div class="col-md-12">
                                                        <label for="username">Username </label>
                                                        <input type="text" name="username" class="form-control" id="username" value="<?php echo $username; ?>">
                                                        <span class="help-block"><?php echo $username_err; ?></span>
                                                    </div>
                                                </div>
                                                <div class="row form-group <?php echo (!empty($usertype_err)) ? 'has-error' : ''; ?>">
                                                    <div class="col-md-12">
                                                        <label for="usertype">UserType:Breakdown or User </label>
                                                        <input type="text" name="usertype" class="form-control" id="usertype" value="<?php echo $usertype; ?>">
                                                        <span class="help-block"><?php echo $usertype_err; ?></span>
                                                    </div>
                                                </div>
                                                <div class="row form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                                    <div class="col-md-12">
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" class="form-control"  value="<?php echo $password; ?>">
                                                        <span class="help-block"><?php echo $password_err; ?></span>
                                                    </div>
                                                </div>
                                                <div class="row form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                                                    <div class="col-md-12">
                                                        <label for="password2">Confirm Password</label>
                                                        <input type="password" name="confirm_password" class="form-control"  value="<?php echo $confirm_password; ?>">
                                                        <span class="help-block"><?php echo $confirm_password_err; ?></span>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" name="signUp" class="btn btn-primary" value="Sign Up">
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>

                                        <div class="tab-content-inner" data-content="login">
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                                <div class="row form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                                    <div class="col-md-12">
                                                        <label for="username">Username </label>
                                                        <input type="text" name="username" class="form-control"  value="<?php echo $username; ?>">
                                                        <span class="help-block"><?php echo $username_err; ?></span>
                                                    </div>
                                                </div>
                                                <div class="row form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                                    <div class="col-md-12">
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" class="form-control" >
                                                        <span class="help-block"><?php echo $password_err; ?></span>
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    
                </div>
            </div>
        </div>
    </header>
    


    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
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

