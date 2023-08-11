<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/navbar.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <title>Sign up</title>

</head>

<body>

    <?php

    include('navbar.php');

    ?>

    <div class="box" style="margin-top: 100px; margin-bottom:100px">
        <div class="form__container">

            <div class="top">
                <span class="span__1">Haven't an account?</span>
                <header class="header_1">Signup</header>
            </div>
            <form action="./classes/signup_process.php" method="post">


                <div class="input-field">
                    <input type="text" class="input" placeholder="Frist Name" id="firstName" name="firstName">
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Last Name" id="lastName" name="lastName">
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Email" id="email" name="email">
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <select name="select" class="input">
                        <option value="" disabled selected>Select Buyer or Seller</option>
                        <option value="1">Buyer</option>
                        <option value="2">Seller</option>
                    </select>
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" id="password" name="password">
                    <i class='bx bx-lock-alt'></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" placeholder="Retype Password" id="retypePassword" name="retypePassword">
                    <i class='bx bx-lock-alt'></i>
                </div>

                <div class="input-field">
                    <a href="login.html"><input type="submit" class="submit" value="Signup" id=""></a>
                </div>

            </form>


            <div class="two-col">
                <div class="one">
                    <!-- <input type="checkbox" name="" id="check"> -->
                    <label for="check"> Have an Account</label>
                </div>
                <div class="two">
                    <label><a href="prelogin.php">Login Now!</a></label>
                </div>
            </div>
        </div>
    </div>

    <?php

    include('footer.php');

    ?>
</body>

</html>