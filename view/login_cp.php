<?php
include('../config/googleapi.php');
$loginurl = $google_client->createAuthUrl();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/login-codepen.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/62f1d050e5.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>

    <div class="login-wrap">

        <div class="login-html">
            <h1>filmku</h1>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <form action="../controller/process.php?action=usroradmin" method="post">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input" name="username">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="password">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign In">
                        </div>

                    </div>
                </form>
                <form action="../controller/process.php?action=register" method="post">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">first name</label>
                            <input id="user" type="text" class="input" name="f_name">
                        </div>
                        <div class="group">
                            <label for="ln" class="label">last name</label>
                            <input id="ln" type="text" class="input" name="l_name">
                        </div>
                        <div class="group">
                            <label for="us" class="label">username</label>
                            <input id="us" type="text" class="input" name="username">
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="email" type="text" class="input" name="email">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="pwd">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
                </form>
                <div class="group">
                    <a href="<?php echo $loginurl ;?>" ><i class="fab fa-google b" > login with google</i></a></button>
                </div>

            </div>
        </div>
    </div>
    </div>

</html>