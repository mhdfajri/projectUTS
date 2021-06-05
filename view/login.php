<?php include "header.php";

?><style>
    .center {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: white;
        border-radius: 10px;

    }

    .center h1 {
        text-align: center;
        padding: 0 0 20px 0 0;
        border-bottom: 1px solid silver;
    }

    .center form {
        padding: 0 40px;
        box-sizing: border-box;
    }

    form .text_field {
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
    }

    .text_field input {
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        outline: none;
    }

    .text_field label {
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: .5s;

    }

    .text_field input:focus~label {
        top: -5px;
        color: #2691d9;
    }
    .pass{
        margin: -5px 0 20px 5px;
        color: #a6a6a6;
        cursor: pointer;
    }
    .pass:hover{
        text-decoration: underline;
    }
    input[type="submit"]{
        width: 100%;
        height: 50px;
        border: 1px solid;
        background :linear-gradient(292deg, rgba(0,0,0,1) 0%, rgba(73,2,2,1) 44%, rgba(172,63,82,1) 100%);
        border-radius: 25px;
        font-size: 18px;
        color:#e9f4fb;
        font-weight: 700;
        cursor:pointer;
        outline:none;   
    }
    input[type="submit"]:hover{
        border-color: #2691d9;
        transition:.5s;
    }
    .signup_link{
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        color: #666666;
    }
    .signup_link a{
        color: #2691d9;
        text-decoration: none;
    }
    .signup_link a:hover{
        text-decoration: underline;
    }

</style>

<body>
    <?php include"navbar.php"; ?>
    <div class="center">
        <h1>Login</h1>
        <form action="../controller/process.php?action=usroradmin" method="post">
            <div class="text_field"><input type="text" name="username"><label for="">username</label></div>
            <div class="text_field"><input type="text" name="password"><label for="">password</label></div>
            <div class="pass">Forgot Password?</div><input type="submit" name="login" value="Login">
            <div class="signup_link">Not a member? <a href="../controller/process.php?action=signup">Sign Up</a></div>
        </form>
    </div>
</body>