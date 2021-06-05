<?php 
include "../model/data.php";
include "header.php";
?>
<link rel="stylesheet" href="a.css">

<body>




    <?php 
    $db = new data();
    include "navbar.php";
    foreach ($db->viewdatafilm() as $d) {
        ?>

<div class="movie_card" id="bright">
  <div class="info_section">
    <div class="movie_header">
      <img class="locandina" src="../asset/img/<?php echo $d['image'];?>"/>
      <h1><?php echo $d['title']; ?></h1>
      <h4></h4>
      <span class="minutes"></span>
      <p class="type"></p>
    </div>
    <div class="movie_desc">
      <p class="text">
        Set in a world where fantasy creatures live side by side with humans. A human cop is forced to work with an Orc to find a weapon everyone is prepared to kill for. 
      </p>
    </div>
    <div class="movie_social">
      <ul>
        <li><i class="material-icons">share</i></li>
        <li><i class="material-icons"></i></li>
        <li><i class="material-icons">chat_bubble</i></li>
      </ul>
    </div>
  </div>
  <div class="blur_back ">
      
      <img  src="../asset/img/<?php echo $d['image'];?>"/>
    </div>
</div>

    <?php
    } ?>
</body>