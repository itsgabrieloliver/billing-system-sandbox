<?php
  if (isset($_POST['login'])) {

    $idn        = $_POST['idn'];
    $password   = $_POST['password'];

    if (empty($_POST['idn']) || empty($_POST['password'])) {
      header('Location: ../login.php?emptyfields');
      exit();
    }

    else {
      require ('../classes/DbActions.php');
      $login = new DbAction;
      $row = $login->login($idn, $password);

      $pwd_check = password_verify($password, $row['user_password']);

      if ($pwd_check == true) {
        session_start();
        $_SESSION['user_session'] = $row['user_id'];

        header('Location: ../dashboard.php?login=success');
        exit();
      }

      else {
        header('Location: ../login.php?invalidcredentials');
        exit();
      }

    }

  }


  else {
    header('Location: ../index.php');
    exit();
  }
