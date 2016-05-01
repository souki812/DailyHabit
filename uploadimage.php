<?php

session_start();


require_once('models/database.php');
$db = databaseConnection();

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    exit();
}

if (!isset($db)) {
    $_SESSION['message'] = "Could not connect to the database.";
} else {
        
    // Create user model
    require_once('models/user.php');
    $user = new User($db);
    $id = $_SESSION['user_id'];
    $allow = array("jpg", "jpeg", "gif", "png");
    $todir = 'views/uploads/';

    // is the file uploaded yet?
    if ( $_FILES['file']['tmp_name'] ) {    

        $info = explode('.', strtolower( $_FILES['file']['name']) ); // whats the extension of the file

        // is this file allowed
        if ( in_array( end($info), $allow) ) {  
    
            if ( move_uploaded_file( $_FILES['file']['tmp_name'], $todir . basename($_FILES['file']['name'] ) ) ) {
                //Save picture name in database
                $success = $user->picture( $_FILES["file"]["name"], $id); 
            }
        }else{
            // error this file ext is not allowed
            echo "Error: " . $_FILES["file"]["error"] . "<br>";
        }
    }
}
    
    
$uploadimage = $db->query("select * from users where user_id=$id");
$selection = $db->query("select * from users where user_id=$id");


// Show whatever this activity is
require('views/header.php');
require('views/activity.php');
require('views/footer.php');