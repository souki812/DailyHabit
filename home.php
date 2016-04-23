<?php 
session_start();


require_once('models/database.php');
$db = databaseConnection();



// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}

$id = $_SESSION['user_id'];
$val = $_POST['val'];

 if (!isset($db)) {
        $_SESSION['message'] = "Could not connect to the database.";
    }else{
     
      require_once('models/user.php');
      $user = new User($db);
        
        
  
    }
if (isset($_POST['task'])) {
    
         //Add a comment 
        if ($_POST['task'] == 'newsfeed') {
            $success = $user->newsfeed(  $_POST['newsfeed'], $id);
            
        }
          //Add a comment 
        if ($_POST['task'] == 'progress') {
            $val = $val + 5;
            $success = $user->progress(  $val, $id);
            echo $success;
        }
    }


    
$selection = $db->query("select * from users where user_id=$id");
$comments =  $db->query("select * from newsfeed where user_id=$id ORDER BY time DESC");


// Show whatever this activity is
require('views/header.php');
require('views/home.php');
require('views/footer.php');