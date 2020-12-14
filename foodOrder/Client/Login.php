<?php
include 'HTML/header.php';
?>

<form class="login" id="lg" method="POST">
  <h1>Login</h1>
    <div id="errLog" class="justify-content-center"></div>
    <div>
        <label for='email' class="label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="yourname@example.com">
    </div>

    <div>
        <label for='pass' class="label">Password</label>
        <input type="password" class="form-control" name="pass" placeholder="********">
    </div>

    <input type="submit" class="btn btn-primary btn-block" id="logsubmit" name="submit" value="LOGIN">
    <a class="nav justify-content-center">Forgot your password?</a>

    <div class="nav justify-content-center">
      <div>
      <span>New to FoodOrder?</span>
      <a href="Signup.php"> Create an account</a>
      </div>
    </div>
</form>

<?php
include 'HTML/footer.php'; 
?>