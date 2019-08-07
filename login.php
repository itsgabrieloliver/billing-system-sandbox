<?php
  $pname = 'Admin Login';
  require ('includes/Header.php');
?>
      <!-- FORMATTING: TAB OVER TO HERE -->
      <form class="mt-5" action="process/Login.php" method="POST">
        <div class="form-group">
          <input class="form-control form-control-sm mt-3" type="text" name="idn" placeholder="Identification Number">
          <input class="form-control form-control-sm mt-3" type="password" name="password" placeholder="Password">
          <button class="btn btn-dark btn-block mt-2" type="submit" name="login">Login</button>
        </div>
      </form>
<?php
  require ('includes/Footer.php');
?>
