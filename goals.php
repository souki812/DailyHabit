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

// Try to connect to the database
 if (!isset($db)) {
        $_SESSION['message'] = "Could not connect to the database.";
    }else{
     
      require_once('models/user.php');
      $user = new User($db);
        
        
        if (isset($_POST['task'])) {
    
                // Add current goal 
                if ($_POST['task'] == 'current') {
                    $success = $user->current(  $_POST['current'], $id);
                }
                // Add future goal 
                if ($_POST['task'] == 'future') {
                    $success = $user->future(  $_POST['future'], $id);
                }
                // Add achieved goal 
                if ($_POST['task'] == 'achieved') {
                    $success = $user->achieved(  $_POST['achieved'], $id);
                }
        }
    
        // Remove a current goal
        if (isset($_POST['current_id'])) {
            $success= $user->remove_current( $_POST['current_id']);
        }
        // Remove a future goal
        if (isset($_POST['future_id'])) {
            $success= $user->remove_future( $_POST['future_id']);
        }
        // Remove an achieved goal
        if (isset($_POST['achieved_id'])) {
            $success= $user->remove_achieved( $_POST['achieved_id']);
        }

    }
    
$current =  $user->selectCurrent( $id);
$future =  $user->selectFuture( $id);
$achieved =  $user->selectAchieved( $id);

// Show whatever this activity is
require('views/goals.php');
require('views/footer.php');

