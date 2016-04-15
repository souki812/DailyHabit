<?php 
session_start();


require_once('models/database.php');
$db = databaseConnection();

$today = getdate();

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}

$id = $_SESSION['user_id'];


 if (!isset($db)) {
        $_SESSION['message'] = "Could not connect to the database.";
    } 
        
        
if (isset($_POST['newsfeed'])) {
    
        // Create user model
        require_once('models/user.php');
        $user = new User($db);
        
         //Add a comment 
        if ($_POST['task'] == 'newsfeed') {
            $success = $user->newsfeed(  $_POST['newsfeed'], $id);
            
        }
}      
        
        
  


$comments =  $db->query("select * from newsfeed where user_id=$id");


// Show whatever this activity is
require('views/header.php');
require('views/home.php');
require('views/footer.php');