<?php include "../model/data.php";
$db = new data();
?>

</html>
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
        .user {
            margin-top: 100px;
            margin-left: 255px;
            height: 100%;

        }

        h1 {
            float: right;
            text-align: center;
            width: 250px;
            margin-right: 100px;
            font-weight: bold;
            border-bottom: 10px solid #490202;
        }

        .bt1 {
            margin-top: 100px;
            text-decoration: none;
            background: transparent;
            border: #490202;

        }

        .bt1 a {
            list-style: none;
            padding: 10px;
            font-size: 20px;
            color: black;
            text-transform: capitalize;


        }

        .bt1:hover a {
            background: #490202;
            border-radius: 10px;
            color: white;
        }

        .c1 {
            margin-top: 35px;
            width: 1200x;

        }

        .table1 {

            background: #490202;
            color: white;
        }
        .btntrash a{
        text-decoration: none;
        color: black;  
        transition: .5s;
        background:white;
        }
        .btntrash a:hover{
            color: white;
            background:#490202;
        }

    </style>
    <title>myAdmin</title>
</head>
<?php include 'sidebar.php'; ?>

<body>

    <div class="user">

        <h1>Table Film</h1>


        <button type="submit" class="bt1"><a href="../controller/process.php?action=tambahfilm"><i class="fas fa-table"> tambah artikel</i></a></button>
        <div class="c1">
            <table class="table">
                <tr class="table1">
                    <th>no</th>
                    <th>image</th>
                    <th>title</th>
                    <th>sinopsis</th>
                    <th>action</th>
                </tr>
                <?php
            foreach ($db->viewdatafilm() as $a) {
                ?>
                <tr>
                    <td><?php echo $a['no']; ?></td>
                    <td>
                        <img src="../asset/img/<?=$a['image'];?>" alt="" width="100px">
                    </td>
                    <td><?php echo $a['title']; ?></td>
                    <td><?php echo $a['sinopsis']; ?></td>
                    <td>

                        <button class="btntrash" type="submit"><a href="../controller/process.php?action=delete&title=<?= $a['title'];?>"><i class="fas fa-trash"></i></a></button>
                        <button class="btntrash" type="submit"><a href="editfilm.php?action=edit&title=<?= $a['title'];?>"><i class="fas fa-edit"></i></a></button>

                    </td>
                </tr>
                <?php
            } ?>
            </table>


        </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>