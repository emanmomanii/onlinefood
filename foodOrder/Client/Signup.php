<?php
include 'HTML/header.php';
?>
<div class="SignUp">
<h1>SignUp</h1>
<form class="signC" id="sData"  method="POST">
 <div class="rows">
    <div id="reg"></div>
    <div class="columns">
        <label for='firstname' class="theLabels">firstname:</label>
        <span class="err" id="fnameErr"></span>
        <input type="text" class="form-control the_Inputs" name="firstname">
    </div>

    <div class="columns">
        <label for='lastname' class="theLabels">lastname:</label>
        <span class="err" id="lnameErr"></span> 
        <input type="text" class="form-control the_Inputs" name="lastname">
    </div>

    <div class="columns">
        <label for='email' class="theLabels">Email:</label>
        <span class="err" id="emailErr"></span>
        <input type="text" class="form-control the_Inputs" name="email">
    </div>
    
     <div class="columns">
        <label for='pass' class="theLabels">password:</label>
        <span class="err" id="passErr"></span>
        <input type="password" class="form-control the_Inputs" name="pass">
    </div>

    <div class="columns">
        <label for='repass' class="theLabels">Confirm Password:</label>
        <span class="err" id="repassErr"></span>
        <input type="password" class="form-control the_Inputs" name="repass">
    </div>

   
    <input type="submit" class="btn btn-primary btn-block btn_sign" name="submit" id="submitt" value="Create your account">
  

    <div class="nav justify-content-center li_acc">
      <div>
      <span>Already have an account?</span>
      <a href="Login.php">Login</a>
      </div>
    </div>
    </div>
</form>
</div>
<?php
include 'HTML/footer.php'; 
?>