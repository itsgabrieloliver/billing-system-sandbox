<?php
  $pname = 'Admin Dashboard';
  require ('includes/Header.php');
  if(isset($_SESSION['user_session'])) {

?>
      <!-- FORMATTING: TAB OVER TO HERE -->
      <div class="jumbotron jumbotron-fluid mt-5 text-center">
        <div class="container">
          <h1 class="display-4">Administration Dashboard</h1>
          <p class="lead">Here would include a bunch of options for configuring our system.</p>
        </div>
      </div>
<?php
  }

  else {
    header('Location: login.php');
    exit();
  }
  require ('includes/Footer.php');
?>
