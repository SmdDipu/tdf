<?php
  require_once 'config/dbconfig.php';
  require_once 'helper/helper.php';
  require_once 'helper/session.php';
  require_once (__DIR__.'/../lib/function.php');
  $db = new Database;
  $hp = new helper;
  $sc = new session();
  $sc::init();
  //$db->dbCreation("nurdb");
  //$db->createTable("nur");
  //$db->dropDatabase("nurdb");
  //$db->dropTable("nur");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Todo App</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
  <header>
    <div class="header_area">
      <h2><a href="index.php" style="color: #2e6da4;">Todo app</a></h2>
    </div>
  </header>