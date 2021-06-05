<?php include"../model/data.php"; 
$db = new data();
?>
<style>
    .a1 {
        position: relative;
        width: 92%;
        height: 100%;

        border: 2px solid white;
        margin-left: 5%;
        margin-top: 10%;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
        place-content: center;
        overflow: hidden;

    }

    .card {
        position: relative;
   
        height: 470px;
        width: 340px;
        display: inline-flex;
        background: white;
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
        transition: 0.4 linear;

    }

    .card:hover {
        box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
    }

    .card .image {
        background: black;
        height: 400px;
        overflow: hidden;
        width: 400px;
    }

    .image img {
        height: 100%;
        width: 100%;
        transition: 0.3s;
      

    }

    .card:hover .image img {
        opacity: 0.6;
        transform: scale(1.1);
    }

    .card .content {
        position: absolute;
        bottom: 0px;
        background: white;
        top: 400px;
        text-align: center;
        padding: 20px 30px;
        overflow: hidden;
    }
    .card .content:hover{
        top: 100px;
        border-radius: 20px 20px 0 0;
        transition: 0.7s;
        background: rgba(73,2,2,1);
        color: white;
    }


    .content .title {
        font-size: 24px;
        font-weight: 600;
        color: rgba(73,2,2,1);
        text-align: center;
    }


    .bottom{
        overflow: hidden;
    }

    .bottom:hover{
        display: inline-block;
    }

    .bottom p {
        color: white;
        font-size: 16px;
        text-align: justify;
        line-height: 1.8em;
        
    }






    .bottom button {
        float: left;
        padding: 7px 15px;
        font-size: 17px;
        background: #e74c3c;
        color: white;
        font-weight: 500;
        border: none;
        margin: 10px 0;
        cursor: pointer;
        transition: 0.3s ease;


    }
    

    .bottom button:hover {
        transform: scale(0.9);
        background: #e64533;
    }

    .bottom button a{
        text-decoration: none;
        color: white;
    }
    .bottom{
        font-size:0px;
    }
    .content:hover {
        display: block;
    }



</style>
<link rel="stylesheet" href="a.css">
<script src=""></script>
<?php include "header.php" ?>
<body>
    <?php include "navbar.php" ?>
    <div class="a1">
        <?php 
        
    foreach ($db->viewdatafilm() as $a) {
        ?>

            <div class="card">
                
            <!-- <div class="image">
                <img src="../asset/img/<?php echo $a['image'];?>" alt="">
            </div>
            <div class="content" id="oi">
                <div class="title"><?php echo $a['title']; ?></div>
                <div class="bottom">
                    <p><?php echo $a['sinopsis']; ?></p>
                    <button><a href="viewfilm.php?film=<?php echo $a['title']?>">View</a></button>
                </div>
            </div> -->
            </div>
        <?php
    } ?>
    </div>

</body>