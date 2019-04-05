<?php
require_once 'ensureLogin.php';
require_once 'connection.php';
 
// Define variables and initialize with empty values
$username = $_SESSION['username'];
 
    // Validate username
    if(empty($_SESSION['username'])){
        header("location: userprofile.php");
        exit;
    } else{
        // Prepare a select statement
        $sql = "SELECT userId FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){

        // Prepare a delete statement
        $sql = "DELETE FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters 
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                // Redirect to login page
                header("location: logout.php");
            }
            } else{
                echo nl2br("\r\n Something went wrong. Please try again later.");
            }
        }

        }else{
                echo "Oops! Something went wrong. Please try again later.";
            }

         }
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);


?>