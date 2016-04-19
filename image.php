<?php
session_start();


require_once('models/database.php');
$db = databaseConnection();


// Must be logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ./');
    exit();
}




move_uploaded_file ($_FILES['uploadFile'] ['tmp_name'],
       "./views/images/{$_FILES['uploadFile'] ['name']}");