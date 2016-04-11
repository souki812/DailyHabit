<?php // Controller for some internal activity
//activity.php
session_start();

// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}

// Show whatever this activity is
require('views/header.php');
require('views/activity.php');
require('views/footer.php');