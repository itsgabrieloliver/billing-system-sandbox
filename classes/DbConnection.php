<?php
  class DbConnection {

    public function connect() {

      $db_host    = 'HOSTNAME';
      $db_user    = 'USERNAME';
      $db_pass    = 'PASSWORD';
      $db_name    = 'DBNAME';

      $db_con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      return $db_con;

    }

  }
