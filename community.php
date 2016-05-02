<?php // Controller for some internal activity
//activity.php
session_start();


require_once('models/database.php');
$db = databaseConnection();



// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}


$id = $_SESSION['user_id'];
$admin = $_SESSION['admin'];

 if (!isset($db)) {
    $_SESSION['message'] = "Could not connect to the database.";
 }else{
     
    require_once('models/user.php');
    $user = new User($db);  
 }
 
  if ($admin == 0 ){
    $selection = $db->query("select * from users");
    $fullName = $db->query("select * from users where user_id=$id");
    
     if (isset($_POST['user_id'])) {
            $success= $user->deleteAccount($_POST['user_id']);
        }    
  }       
 if($admin == 1 ){
    $selection = $db->query("select * from users");
    $fullName = $db->query("select * from users where user_id=$id");
    
   if (isset($_POST['user_id'])) {
            $success= $user->deleteAccount($_POST['user_id']);
        }      
            
                            
    }
   




// Show whatever this activity is
require('views/header.php');
require('views/community.php');
require('views/footer.php');