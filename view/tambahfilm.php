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
        .text_field{
            position:absolute;
            left:39%;
            top:34%;
            text-transform: capitalize;
            transition: .5s;
            font-size:15px;
            font-weight: bold;
        }
        input:focus ~ .text_field{
            top:31%;
            
        }

        .input1{
            background :transparent;
            margin-bottom: 50px;
            border: transparent;
            padding:0 20px;
            border-bottom: 2px solid #490202;
            outline: none;
        }
        .text_field2{
            position:absolute;
            left:39%;
            top: 300px;
            text-transform: capitalize;
            font-weight: bold;
        }
        .input2{
            border: 2px solid #490202;
            height:200px;
            width:350px;
            
        }
        .input3{
            border-radius: 2px;
            background:transparent;
            font-weight: bold;

        }
        .input3:hover {
            background:#490202;
            color :white;
            transition:.5s;

        }
        h7{
            font-size:12px;
            font-weight:bold;
            color: #490202;
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
        position: relative;
        top: 30px;
        }
        input[type="submit"]:hover{
        border-color: #2691d9;
        transition:.5s;

    }
    .text_field3{
            position:absolute;
            left:39%;
            top: 300px;
            text-transform: capitalize;
            font-weight: bold;
        }
        .input4{
            position: relative;
            top: 30px;
            border-radius: 2px;
            background:transparent;
            font-weight: bold;
        }

    </style>
    <title>myAdmin</title>
</head>
<?php include 'sidebar.php'; ?>

<body>

    <div class="center">
    <h1>Insert film</h1>
        <form action="../controller/process.php?action=insertfilm" method="post" enctype="multipart/form-data">
            <input type="text" class="input1" name="title">
            <label class= "text_field">title</label>
            <textarea class="input2" name="sinopsis"></textarea>
            <label class= "text_field2">sinopsis</label>
            <h7>* input your image cover film (jpg, png etc)</h7>
            <input type="file"  class="input3" name="img" required>
            <input type="text" class="input4" placeholder=" iframe(video)" name="iframe" >
            
            <input type="submit" class="input3" >
        </form>
    </div>
</body>

</html>