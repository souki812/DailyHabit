<?php 
session_start();
// Connect to the database
require_once('models/database.php');
$db = databaseConnection();

if (!isset($db)) {
  echo 'Cannot connect to the chat.';
  exit();
}



// Receive a new message
if (isset($_POST['new_message'])) {
  $insert = $db->prepare('insert into chat(ip,message) values(:ip,:message)');
  $insert->bindParam(':ip', $_SERVER['REMOTE_ADDR']);
  $insert->bindParam(':message', htmlentities($_POST['new_message'], ENT_QUOTES, 'utf-8'));
  $insert->execute();
  exit();
}

// Send recent messages
if (isset($_POST['update_time'])) {
  $select = $db->prepare('select * from chat where time > :start_time and time > :update_time');
  $select->bindParam(':start_time', $_SESSION['start_time']);
  $select->bindParam(':update_time', $_POST['update_time']);
  $select->execute();
  
  $rows = $select->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($rows);
  exit();
}

// Remember when the page was last loaded
$select = $db->query('select CURRENT_TIMESTAMP');
$row = $select->fetch();
$_SESSION['start_time'] = $row[0];


