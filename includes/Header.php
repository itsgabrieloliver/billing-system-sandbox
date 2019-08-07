<?php
  session_start();
  require('classes/DbActions.php');
  $receive = new DbAction;
  $cname = $receive->get_company_name();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $cname ?> | <?php echo $pname; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php"><?php echo $cname ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <?php
            if(isset($_SESSION['user_session'])) {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="createadmin.php">Create Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="process/Logout.php">Logout</a>
          </li>
          <?php
            }

            else {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <?php
            }
          ?>
        </ul>
      </div>
    </nav>
    <div class="container">
