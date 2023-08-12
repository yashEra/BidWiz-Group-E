<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">    <title>Login</title>

</head>
<body>
    	
<?php
  
  include('navbar.php');

  ?>
	
    <div class="box" style="margin-top: 100px">
    <div class="form__container">



        <div class="top">
            <span class="span__1">Have an account?</span>
            <header class="header_1">Buyer Login</header>
        </div>

		<form action="./classes/bloginProcess.php" method="post">

        <div class="input-field">
            <input type="text" class="input" placeholder="Email" id="" name="email">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="" name="password">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
           <input type="submit" class="submit" value="Login" id="">
        </div>

		</form>

        <div class="two-col">
            <div class="one">
               <label for="check"> Haven't an Account</label>
            </div>
            <div class="two">
                <label><a href="signup.php">Sign up Now!</a></label>
            </div>
        </div>
    </div>
</div> 
<?php
  
  include('footer.php');

  ?>
</body>
</html>