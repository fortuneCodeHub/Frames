<?php include_once "includes/htmlhead.php"; ?>
  <body class="text-center">
    <div class="black-bg align-items-center d-flex justify-content-center flex-column">
      <div class="form-signin shadow">
        <?php if (!empty($errors)) : ?>
          <div class="alert alert-danger">
            <?php echo implode("<br>", $errors); ?>
          </div>
        <?php endif; ?>
        <form method="post" enctype="multipart/form-data">
          <a href="<?=ROOT_URL?>/home" class="h3 form-anchor">FortuneCodeHub</a>
          <div class="mt-1">
            <h3 style="font-weight:400;">Login</h3>
          </div>

          <div class="form-floating">
            <input type="text" name="name" class="form-control mt-4" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Username/Email address</label>
          </div>
          <div style="color:red;text-align:start;"><?php if(!empty($user)) echo $user->getError("nameErr");?></div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <div style="color:red;text-align:start;"><?php if(!empty($user)) echo $user->getError("passwordErr");?></div>

          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
          <a href="<?=ROOT_URL?>/home" class="form-bottom-anchor mx-1">&ShortLeftArrow; Home</a>
          <a href="<?=ROOT_URL?>/signup" class="form-bottom-anchor mx-1">Signup</a>
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
