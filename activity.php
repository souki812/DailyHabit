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
 if (!isset($db)) {
        $_SESSION['message'] = "Could not connect to the database.";
    } else {
        
        // Create user model
        require_once('models/user.php');
        $user = new User($db);
        
        // Attempt registration
        if ($_POST['task'] == 'biography') {
            $success = $user->bio($id,  $_POST['biography']);

        }
    }
$selection = $db->query("select * from users where user_id=$id");

// Show whatever this activity is
require('views/header.php');
require('views/activity.php');
require('views/footer.php');