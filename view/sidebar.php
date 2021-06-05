<style>
    * {
        margin: 0;
        padding :0;
        list-style: none;
        

    }
    .sidebar{
        
        position:fixed;
        left:0px;
        top: 0;
        width:250px;
        height:100%;
        background: #490202;
        transition: all .5s ease;
    }
    .sidebar header{
        font-size:22px;
        color: white;
        text-align:center;
        line-height:70px;
        background: linear-gradient(292deg, rgba(0,0,0,1) 0%, rgba(73,2,2,1) 44%, rgba(172,63,82,1) 100%);
        user-select: none;
    }
    .sidebar ul a{
        display: block;
        /* height: 100%;
        width:100%; */
        line-height: 65px;
        font-size:20px;
        color:white;
        padding-left: 40px;
        box-sizing: border-box;
        border-top: 1px solid rgba(255,255,255,.1);
        border-bottom: 1px solid black;
        text-decoration: none;
        transition: .4s;
    }
    ul li:hover a{
        padding-left: 50px;
    }
    .sidebar ul a i{
        margin-right: 16px;
    }
    /* #check{
        display: none;
    }
    label #btn,label #cencel{
        position: absolute;
        cursor: pointer;
        background:#490202;
        border-radius: 3px;

    }
    label #btn{
        left:40px;
        top:25px;
        font-size:35px;
        color: white;
        padding:6px 12;
        transition: all .5s;
    }
    label #cencel{
        z-index: 1111;
        left:-195px;
        top: 17px;
        font-size:30px;
        color: #0a5275;
        padding: 4px 9px;
        transition: all .5s ease;
    }
    #check:checked ~ .sidebar{
        left: 0;
    }
    #check:checked ~ label #btn{
        left: 250px;
        opacity: 0;
        pointer-events: none;
    }
    #check:checked ~ label #cencel{
        left: 195px;
    } */
</style>
<!-- <input type="checkbox" id="check">
<label for="check">
    <i class="fa fa-bars" id="btn"></i>
    <i class="fa fa-times" id="cencel"></i>
    
</label> -->
<div class="sidebar">
    <header>My admin</header>
    <ul>
        <li><a href="#"><i class="fas fa-qrcode"></i> Dashboard</a></li>
        <li><a href="../index.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="user.php"><i class="fas fa-users"></i> Users</a></li>
        <li><a href="admin.php"><i class="fas fa-film"></i> Film</a></li>
        <li><a href="#"><i class="fas fa-chart-area"></i> Chart</a></li>
    </ul>
</div>