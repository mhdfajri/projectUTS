<?php include "../model/data.php";
$db = new data();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link css -->
    <link rel="stylesheet" href="./asset/css/sidebar.css">
    <link rel="stylesheet" href="../asset/css/sidebar.css">
    <!-- end link css -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/62f1d050e5.js" crossorigin="anonymous"></script>
    <style>
        .center {
            width: 400px;
            height: 500px;
            margin-left: 550px;
            margin-top: 150px;
            text-transform: capitalize;

        }

        h1 {

            text-transform: capitalize;
            font-weight: bold;
            border-bottom: 10px solid #490202;
            text-align: center;
        }
        .center form{
            margin-top:50px;
            padding: 0 40px;
        box-sizing: border-box;
        }
        input[type="text"]{
            border:none;
            outline:none;
            border-bottom: 2px solid #490202;
            margin:0 10px 10px 0;

        }
        label{
            font-size: 16px;
            color:#490202;
            transition: .5s;
        }
        input:focus ~ label {
            font-size: 12px;
            color:#2691d9
        }


        input[type="submit"]{
            width: 50%;
        height: 50px;
        border: 1px solid;
        background :linear-gradient(292deg, rgba(0,0,0,1) 0%, rgba(73,2,2,1) 44%, rgba(172,63,82,1) 100%);
        border-radius: 25px;
        font-size: 18px;
        color:#e9f4fb;
        font-weight: 700;
        cursor:pointer;
        outline:none; 
        margin-top: 10px;
        }
        input[type="submit"]:hover{
        border-color: #2691d9;
        transition:.5s;
    }

    </style>
    <title>myAdmin</title>
</head>
<?php 
include 'sidebar.php'; 
echo $_GET['action'] ?>

<body>
<?php foreach($db ->  selectuser($_GET['action']) as $a){ ?>
    <div class="center">
    <h1>Edit user</h1>
        <form action="../controller/process.php?action=updateuser" method="post" enctype="multipart/form-data">
        <input type="hidden" name="no" value="<?php echo $a['no'] ?>">
            <input type="text" class="input1" name="first_name" value="<?php echo $a['first_name'] ?>">
            <label class= "">first name</label>
            <input type="text" class="input2" name="last_name" value = <?php echo$a['last_name'] ?>>
            <label class= "">last name</label>
            <input type="text" class="input1" name="username" value="<?php echo $a['username'] ?>">
            <label class= "">username</label>
            <input type="text" class="input1" name="email" value="<?php echo $a['email'] ?>">
            <label class= "">email</label>
            <input type="text" class="input1" name="password" value="<?php echo $a['password'] ?>">
            <label class= "">password</label>
            <input type="submit">
        </form>
    </div>
    <?php } ?>
</body>

</html>

