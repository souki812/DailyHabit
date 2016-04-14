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
$selection = $db->query("select * from users where user_id=$id");



// Show whatever this activity is
require('views/header.php');
require('views/activity.php');
require('views/footer.php');