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


 if (!isset($db)) {
        $_SESSION['message'] = "Could not connect to the database.";
    }else{
     
      require_once('models/user.php');
      $user = new User($db);
        
        
if (isset($_POST['task'])) {
    
         //Add a comment 
        if ($_POST['task'] == 'current') {
            $success = $user->current(  $_POST['current'], $id);
            
        }
         if ($_POST['task'] == 'future') {
            $success = $user->future(  $_POST['future'], $id);
            
        }
         if ($_POST['task'] == 'achieved') {
            $success = $user->achieved(  $_POST['achieved'], $id);
            
        }
    }

}
    
$current = $db->query("select * from current where user_id=$id");
$future = $db->query("select * from future where user_id=$id");
$achieved = $db->query("select * from achieved where user_id=$id");

// Show whatever this activity is
require('views/header.php');
require('views/goals.php');
require('views/footer.php');