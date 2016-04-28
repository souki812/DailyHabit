<?php // Controller for some internal activity
//activity.php
session_start();


require_once('models/database.php');
$db = databaseConnection();





// Must be logged in
if (!isset($_SESSION['user_id'])) {
    exit();
}

$id = $_SESSION['user_id'];
 if (!isset($db)) {
        $_SESSION['message'] = "Could not connect to the database.";
    } else {
        
        // Create user model
        require_once('models/user.php');
        $user = new User($db);
        
         if (isset($_GET['user_id'])) {
        //Remove comment
         $id = (int) $_GET['user_id'];
         $success= $user->selectAll( $id);
        $selection = $user->selectAll( $id);
        $comments = $user->selectComments($id);

        }
        
        
        
    
    }
  
$comments =  $db->query("select * from newsfeed where user_id=$id ORDER BY time DESC");


// Show whatever this activity is
require('views/header.php');
require('views/friend.php');
require('views/footer.php');