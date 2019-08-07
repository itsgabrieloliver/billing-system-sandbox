<?php
  $pname = 'Admin Create';
  require ('includes/Header.php');
  if(isset($_SESSION['user_session'])) {
?>
      <!-- FORMATTING: TAB OVER TO HERE -->
      <form class="mt-5" action="process/CreateAdmin.php" method="POST">
        <div class="form-group">
          <input class="form-control form-control-sm mt-3" type="text" name="first-name" placeholder="First Name">
          <input class="form-control form-control-sm mt-3" type="text" name="last-name" placeholder="Last Name">
          <input class="form-control form-control-sm mt-3" type="text" name="idn" placeholder="Identification Number">
          <input class="form-control form-control-sm mt-3" type="password" name="password" placeholder="Password">
          <input class="form-control form-control-sm mt-3" type="password" name="confirm-password" placeholder="Confirm Password">
          <button class="btn btn-dark btn-block mt-2" type="submit" name="create-admin">Create</button>
        </div>
      </form>
<?php
  }

  else {
    header('Location: login.php');
    exit();
  }
  require ('includes/Footer.php');
?>
