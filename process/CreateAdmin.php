<?php
  if (isset($_POST['create-admin'])) {

    $first_name         = $_POST['first-name'];
    $last_name          = $_POST['last-name'];
    $idn                = $_POST['idn'];
    $password           = $_POST['password'];
    $confirm_password   = $_POST['confirm-password'];

    if (empty($_POST['first-name']) || empty($_POST['last-name']) || empty($_POST['idn']) || empty($_POST['password']) || empty($_POST['confirm-password'])) {
      header('Location: ../createadmin.php?emptyfields');
      exit();
    }

    elseif (strlen($password) < 6) {
      header('Location: ../createadmin.php?weakpass');
      exit();
    }

    elseif ($password != $confirm_password) {
      header('Location: ../createadmin.php?nomatch');
      exit();
    }

    else {
      require ('../classes/DbActions.php');
      $query = new DbAction;
      $result = $query->check_idn($idn);

      if ($result->num_rows > 0) {
        header('Location: ../createadmin.php?idnexists');
        exit();
      }

      else {
        $create = new DbAction;
        $create->register($first_name, $last_name, $idn, $password);
        header('Location: ../createadmin.php?success');
        exit();
      }
    }


  }

  else {
    header('Location: ../index.php');
    exit();
  }
