<?php
include('../config/googleapi.php');
$loginurl = $google_client->createAuthUrl();
include"header.php";
include "navbar.php";
?>
<style>
.center {
    width: 380px;
    height: 300px;
    position: relative;
    margin: 13% 0 0 38%;
}
h1{
    text-align: center;
    font-size:50px;
    color: #490202;
    font-family: 'Lobster', cursive;
}
.name_input {
    width:180px;
    height: 20px;
    background: transparent;
    border: transparent;
    border-bottom: 2px solid  #ADADAD;
    outline: none;
    color:#ADADAD;
    
}
.name_input:hover{
    color:black;
}
.name_input2 {
    width:180px;
    height: 20px;
    background: transparent;
    border: transparent;
    border-bottom: 2px solid  #ADADAD;
    outline: none;
    color:#ADADAD;
    
}
.name_input2:hover{
    color:black;
}

.label_name1  {
    position:absolute;
    left:0px;
    top: 82px;
    font-weight: bold;
    color:#ADADAD;
    text-transform: capitalize;
    padding: 0 10px;
    pointer-events: none;
    transition: .5s;
    font-size: 12px;
    
}
.name_input:focus~.label_name1{
    
    color: #1A73E8;
    font-size: 10px;
    transition: .5s;
    
}




.label_name2{
    position:absolute;
    top: 82px;
    left:48%;
    font-weight: bold;
    color:#ADADAD;
    text-transform: capitalize;
    padding: 0 10px;
    font-size: 12px;
}
.name_input2:focus~.label_name2{
    
    color: #1A73E8;
    font-size: 10px;
    transition: .5s;
    
}
.inline-input0{
    width: 371px;
    position: relative;
    margin: 45px 0 0 0;
    background:transparent;
    border: none;
    border-bottom: 2px solid #ADADAD;
    outline: none; 
}
.inline-label0{
    position:absolute;
    top: 100px;
    margin-top: 50px;
    left: 5px;
    font-size: 12px;
    text-transform: capitalize;
    color: #ADADAD;
    font-weight: bold;
    transition: .5s;
    
}
.inline-input{
    width: 371px;
    position: relative;
    margin: 45px 0 0 0;
    background:transparent;
    border: none;
    border-bottom: 2px solid #ADADAD;
    outline: none;
    
}
.inline-label{
    position:absolute;
    top: 159px;
    margin-top: 50px;
    left: 5px;
    font-size: 12px;
    text-transform: capitalize;
    color: #ADADAD;
    font-weight: bold;
    transition: .5s;
    
}
.inline-input:focus ~ .inline-label

{
    color: #1A73E8;
    font-size: 10px;
    transition: .5s;
 
}
.inline2{
    position:absolute;
    top: 229px;
    margin-top: 50px;
    left: 5px;
    font-size: 12px;
    text-transform: capitalize;
    color: #ADADAD;
    font-weight: bold;
    transition: .5s;
    
}
.inline-input2{
    width: 371px;
    position: relative;
    margin: 45px 0 0 0;
    background:transparent;
    border: none;
    border-bottom: 2px solid #ADADAD;
    outline: none;
    transition: .5s;
    
}
.inline-input2:focus ~ .inline2

{
    color: #1A73E8;
    font-size: 10px;
    transition:.5s;
 
}
.btn1{
    position: relative;
    margin: 20px 0 0 0;
    width:371px;
    height:30px;
    border-radius: 10px;
    border: none;
    font-weight: bold;
    color: #490202;
}
.btn1:hover{
    border: 1px solid #490202;
    background:#490202;
    color: white;
}
.btn2{
    position: relative;
    margin: 30px 0 0 0;
    width:371px;
    height:30px;
    font-size: 15px;
    transition: .5s;   
}
.btn2 a:hover{
    font-size: 18px;
    transition: .5s;
    color: #1A73E8;
}

.btn2 a {
    color: #490202;
    text-transform: capitalize;
    font-weight: bold;
    transition: .5s;

}


</style>

<body>

    <div class="center">
    <h1>Sign up</h1>
        <form method="post" action="../controller/process.php?action=register">
            <input type="text" class="name_input" name="f_name">
            <label class="label_name1">first name</label>
            <input type="text" class="name_input2" name="l_name">
            <label class="label_name2">last name</label>
            <input type="text" class="inline-input0" id="username" name="username">
            <label class="inline-label0" for="username">username</label>
            
            <input type="email" class="inline-input" id="email" name="email">
            <label class="inline-label" for="email">email</label>
           
            <input type="password" class="inline-input2" id="password" name="pwd">
            <label class=" inline2" for="password">password</label>

            <input type="submit" class="btn1">
            <div class="btn2">
            <a href="<?php echo $loginurl ;?>" ><i class="fab fa-google" > login with google</i></a>
            </div>
            
        </form>
    </div>
    
</body>