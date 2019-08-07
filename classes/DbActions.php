<?php

  require('DbConnection.php');
  class DbAction {

    public function get_company_name() {

      $sql = 'SELECT * FROM organization_info';

      $connect = new DbConnection;
      $con_var = $connect->connect();
      $result = $con_var->query($sql);

      $row = mysqli_fetch_assoc($result);

      return $row['org_name'];

    }

    public function check_idn($idn) {

      $connect = new DbConnection;
      $con_var = $connect->connect();

      $stmt = $con_var->prepare("SELECT * FROM users WHERE user_idn = ?");
      $stmt->bind_param('i', $idn);
      $stmt->execute();
      $stmt->store_result();

      return $stmt;

    }

    public function register($first_name, $last_name, $idn, $password) {

      $user_hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $connect = new DbConnection;
      $con_var = $connect->connect();

      $stmt = $con_var->prepare("INSERT INTO users (user_first, user_last, user_idn, user_password) VALUES (?, ?, ?, ?)");
      $stmt->bind_param('ssss', $first_name, $last_name, $idn, $user_hashed_password);
      $stmt->execute();

      return $stmt;

    }

    public function login($idn, $password) {

      $connect = new DbConnection;
      $con_var = $connect->connect();

      $stmt = $con_var->prepare("SELECT * FROM users WHERE user_idn = ?");
      $stmt->bind_param('s', $idn);
      $stmt->execute();
      $result = $stmt->get_result();

      $assoc = $result->fetch_assoc();

      return $assoc;

    }

  }
