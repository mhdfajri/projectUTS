<?php 
include"header.php";
include"../model/data.php"; 
$db = new data();?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');

    .box {
        width: 1000px;
        height: 500px;
        position: relative;
        
        margin:200px 0 0 100px;
        margin-left: 20%;
        
        
    }
    .box img {
        width: 350px;
        height: 100%;
        position:absolute;
        top: 0;
        left: 600px;
        border-radius: 10px;
    }
    .box-sinopsis{
        width:571px;
        height: 150px;
        margin:10px 0 0 0 ;
        font-size:20px;
        text-transform:inherit;
        font-family: 'Oswald', sans-serif;
    }
    
</style>

<body>
    <?php include "navbar.php"; 
foreach ($db->viewupdatefilm($_GET['film']) as $a) {
    ?>

    <div class="box">
        <div class="video">
            <?php echo $a['iframe']; ?>
        </div>
        <div class="img">
            <img src="../asset/img/<?php echo $a['image']; ?>" alt="">
        </div>
        <div class="box-sinopsis">
            Sinopsis :
            <?php echo $a['sinopsis']; ?>
        </div>

    </div>
    <?php
} ?>
</body>

</html>