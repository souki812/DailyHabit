<?php


    session_start();
 // Connect to database
    require_once('models/database.php');
    $db = databaseConnection();
    
    
    $query = "UPDATE users SET goal='".$_POST['goal']."' WHERE user_id='".$_SESSION['user_id']"' LIMIT 1";
    
    $db->query($query);
    
  