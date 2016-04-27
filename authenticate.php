<?php // Controller for registration/login
//authenticate.php
session_start();

// Should have form inputs
if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['task'])) {
   
    // Connect to database
    require_once('models/database.php');
    $db = databaseConnection();
    
    if (!isset($db)) {
        $_SESSION['message'] = "Could not connect to the database.";
    } else {
        
        // Create user model
        require_once('models/user.php');
        $user = new User($db);
        
        // Attempt registration
        if ($_POST['task'] == 'register') {
         
                  if(!$_POST['email']){
                     $error.="<br />Please enter your email";
                     
                  }else if( !filter_var($_POST['emai'], FILTER_VALIDATE_EMAIL)){
                     $error.="<br />Please enter a valid email address";
                  }
                  
                   if(!$_POST['password']){
                     $error.="<br />Please enter a password";
                   }else{
                     if (strlen($_POST['password'])<6) $error.="<br />Please enter a password with at least 6 characters";
                     
                   }
                   
                    if(!$_POST['first']){
                     $error.="<br />Please enter your first name";
                     
                  }
                  
                   if(!$_POST['last']){
                     $error.="<br />Please enter your last name";
                     
                  }
                  
                   if(!$_POST['email']){
                     $error.="<br />Please enter your email";
                     
                  }
                  
                   if(!$_POST['gender']){
                     $error.="<br />Please enter your gender";
                     
                  }
                  
                   if(!$_POST['age']){
                     $error.="<br />Please enter your age";
                     
                  }
         
            if($error){
               echo "There were errors in your signup!".$error;
            }else{
                $success = $user->register( $_POST['first'], $_POST['last'], $_POST['email'], $_POST['password'],  $_POST['gender'], $_POST['age']);
            
            if ($success) {
                $_SESSION['message'] = 'Registered! You can now log in.';
            } else {
                $_SESSION['message'] = 'Sorry, there is an account with the same email.';
            }
            }
         
         
       
        }
        
        // Or attempt login
        elseif ($_POST['task'] == 'login') {
            $user_id = $user->login($_POST['email'], $_POST['password']);
            
            if (isset($user_id)) {
                session_regenerate_id(true); // New session for login
                $_SESSION['user_id'] = $user_id;
            } else {
                $_SESSION['message'] = 'Wrong username or password.';
            }
        }
    }
}

// Return home
header('Location: ./home.php');
exit();