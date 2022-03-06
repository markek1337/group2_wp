<?php include('php-main.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Registration</title>
      <link rel="stylesheet" href="registerstyle.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login
            </div>
            <div class="title signup">
               Signup
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
         
            <div class="form-inner">
            <form method="post" action="register.php" class="login" style="color:red !important">
            <?php echo display_error(); ?>
                  <div style="margin-bottom:0px;margin-left:2px;"><label>Username</label></div>
                  <div class="field" style="margin-bottom:0px;margin-top:10px;">
                     <input type="text" name="username" >
                  </div>
                  <div style="margin-top:10px;margin-left:2px;"><label>Password</label></div>
                  <div class="field" style="margin-bottom:0px;margin-top:10px;">
                     <input type="password" name="password">
                  </div>

                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="login_btn" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form method="post" action="register.php" class="register signup">
                  <?php echo display_error(); ?>  
                     <div style="margin-bottom:0px;margin-left:2px;"><label>Username</label></div>
                     <div class="field"  style="margin-bottom:0px;margin-top:10px;">
                        <input type="text" name="username" value="<?php echo $username; ?>">
                     </div>
                     <div style="margin-bottom:0px;margin-top:10px;margin-left:2px;"><label>Email</label></div>
                     <div class="field" style="margin-bottom:0px;margin-top:10px;">
                     <input type="email" name="email" value="<?php echo $email; ?>">
                     </div>
                     <div style="margin-bottom:0px;margin-top:10px;margin-left:2px;"><label>Password</label></div>
                     <div class="field" style="margin-bottom:0px;margin-top:10px;">
                        <input type="password" name="password_1">
                     </div>
                     <div style="margin-bottom:0px;margin-top:10px;margin-left:2px;"><label>Retype password</label></div>
                     <div class="field" style="margin-bottom:0px;margin-top:10px;">
                        <input type="password" name="password_2">
                     </div>
                     <div class="field btn">
              <div class="btn-layer">
               </div>
               <input type="submit" name="register_btn" value="Signup">
                           </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>