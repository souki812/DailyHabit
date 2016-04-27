<?php // Controller for some internal activity
//activity.php
session_start();


require_once('models/database.php');
$db = databaseConnection();

$uploaddir = 'views/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);




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
        
        
         if (isset($_POST['task'])) {
        //Add a biography
        if ($_POST['task'] == 'biography') {
            $success = $user->bio($id,  $_POST['biography']);

        }
        
        //Add a comment
        if ($_POST['task'] == 'newsfeed') {
            $success = $user->newsfeed( $_POST['newsfeed'], $id);
        }
    
        }
        
        if (isset($_POST['comment_id'])) {
        //Remove comment
         $success= $user->remove_comment( $_POST['comment_id']);
        }
    }
$selection = $db->query("select * from users where user_id=$id");
$comments =  $db->query("select * from newsfeed where user_id=$id ORDER BY time DESC");


// Show whatever this activity is
require('views/header.php');
require('views/activity.php');
require('views/footer.php');