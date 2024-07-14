<?php //exit; ?>
<?php include_once "includes/htmlhead.php"; ?>
  <body class="text-center">
    <div class="black-bg align-items-center d-flex justify-content-center flex-column">
      <div class="form-signin shadow">
        <form method="post" enctype="multipart/form-data">
          <div class="mt-1">
            <h3 style="font-weight:400;">Create Account</h3>
          </div>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Fullname" value="<?=old_value("name")?>">
            <label for="floatingInput">Fullname</label>
          </div>
          <div style="color:red;text-align:start;"><?php if (!empty($user)) echo $user->getError("nameErr");?></div>
          <div class="form-floating">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" value="<?=old_value("email")?>">
            <label for="floatingInput">Email address</label>
          </div>
          <div style="color:red;text-align:start;"><?php if (!empty($user)) echo $user->getError("emailErr");?></div>
          <div class="form-floating">
            <input type="number" name="age" class="form-control" id="floatingInput" placeholder="age" value="<?=old_value("age")?>">
            <label for="floatingInput">Age</label>
          </div>
          <div style="color:red;text-align:start;"><?php if (!empty($user)) echo $user->getError("ageErr");?></div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" value="<?=old_value("password")?>">
            <label for="floatingPassword">Password</label>
          </div>
          <div style="color:red;text-align:start;"><?php if (!empty($user)) echo $user->getError("passwordErr");?></div>
          <div class="form-floating">
            <input type="password" name="rptpassword" class="form-control" id="floatingPassword" placeholder="Repeat Password" value="<?=old_value("rptpassword");?>">
            <label for="floatingPassword">Repeat Password</label>
          </div>
          <div style="color:red;text-align:start;"><?php if (!empty($user)) echo $user->getError("rptpasswordErr");?></div>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" name="term" value="Accept Terms and Conditions" 
              <?=old_checked("term", "Accept Terms and Conditions")?>> Accept Terms & Conditions
            </label>
          </div>
          <div style="color:red;text-align:start;"><?php if (!empty($user)) echo $user->getError("termErr");?></div>
          <button class="w-100 btn my-1 btn-primary" type="submit" name="submit">Create Account</button>
          <a href="<?=ROOT_URL?>/home" class="form-bottom-anchor mx-1">&ShortLeftArrow; Home</a>
          <a href="<?=ROOT_URL?>/signin" class="form-bottom-anchor mx-1">Login/Sigin</a>
        </form>
      </div>
      <div class="footer fixed-bottom text-center text-white">
            &copy; from 2022 - <?=date("Y");?> created by <a href="<?=ROOT_URL;?>/home" class="footer-anchor">Fortunecodehub</a>
        </div>
    </div>  
    <!-- CSS Art -->
    <?php //include_once "includes/cssart.php"; ?>
    <!-- JS Link -->
    <?php include_once "includes/jslink.php" ?>
  </body>
</html>
