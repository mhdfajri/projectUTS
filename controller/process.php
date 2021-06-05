<?php 
$a = $_GET['action'];
include"../model/data.php";
$db = new data();
if($a=="login"){
    header('location:../view/login_cp.php');
}
elseif($a=="usroradmin"){
    if($_POST['username']=="admin"){
        
        header('location:../view/admin.php');
    }
    else{
        foreach( $db -> viewuser() as $a){
            if ($_POST['username'] == $a['username'] && $_POST['password'] == $a['password']){
                               header('location:../view/home.php');
                break;
            }
            else{
                header('location:../view/login_cp.php'); 
            }
        }
    }
}
elseif($a=="tambahfilm"){
    header('location:../view/tambahfilm.php');
}
elseif($a=="insertfilm"){
    // input in directory
    $iframe = $_POST['iframe'];
    $title = $_POST['title'];
    $sinopsis = $_POST['sinopsis'];
    $file=$_FILES['img']['tmp_name'];
    $file_name =basename ($_FILES['img']['name']);
    $target_dir="../asset/img/";
    $target_file=$target_dir.basename($_FILES['img']['name']);
    move_uploaded_file($file,$target_file);
    
    // input in database
    $db -> insertfilm($title,$sinopsis,$file_name,$iframe);
    header('location:../view/admin.php');
    // var_dump($file_name);


}
elseif($a=="updatefilm"){
    // input in directory
    $iframe = $_POST['iframe'];
    $no = $_POST['no'];
    $title = $_POST['title'];
    $sinopsis = $_POST['sinopsis'];
    $file=$_FILES['img']['tmp_name'];
    $file_name =basename ($_FILES['img']['name']);
    $target_dir="../asset/img/";
    $target_file=$target_dir.basename($_FILES['img']['name']);
    move_uploaded_file($file,$target_file);
    //update data base
    $db -> editfilm($title,$sinopsis,$file_name,$no,$iframe);
    header('location:../view/admin.php');
   
}
elseif($a=="delete"){
    $title=$_GET['title'];
    $db -> deletefilm($title);
    header('location:../view/admin.php');
}
elseif($a=="deleteuser"){
    $no = $_GET['no'];
    $db -> deleteuser($no);
    header('location:../view/user.php');
}
elseif($a=="signup"){
    header('location:../view/register.php');
}
elseif($a=="register"){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $username = $_POST['username'];

    $db -> adduser($f_name,$l_name,$email,$password,$username);
    header('location:../index.php');

}
elseif($a=="insertuser"){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $username = $_POST['username'];

    $db -> adduser($f_name,$l_name,$email,$password,$username);
    header('location:../view/user.php');

}

elseif ($a=="adduser"){
    header('location:../view/adduser.php');
}
elseif ($a=="apigoogle"){
    require_once "../config/googleapi.php";
    if(isset($_SESSION['acces_token'])){
        $google_client->setAccessToken($_SESSION['access_token']);
    }
    elseif (isset($_GET['code'])) {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    }

    $google_service = new Google_Service_Oauth2($google_client);
    $data = $google_service->userinfo_v2_me->get();
// var_dump($data);
    $_SESSION['email'] = $data['email'];
    $_SESSION['gender'] = $data['gender'];
    $_SESSION['familyName']=$data['familyName'];
    $_SESSION['givenName']=$data['givenName'];
    $_SESSION['name']=$data['name'];
    $_SESSION['pass']=$data['givenName'];
    $password = 10010;
    $db ->adduser($_SESSION['givenName'],$_SESSION['familyName'],$_SESSION['email'],$password,$_SESSION['name']);   
    header('location:../index.php');
}
elseif($a=="updateuser"){
    
    // get some data from user to want update 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $no = $_POST['no'];
    $db->updateuser($no,$first_name,$last_name,$username,$email,$password);
    header('location:../view/user.php');

}
elseif($a=="home"){
    header('location:../index.php');
}
elseif($a=="bastrating"){
    header('location:../view/bastrating.php');
}
elseif($a=="year"){
    header('location:../view/year.php');    
}
elseif($a=="country"){
    header('location:../view/country.php');    
}


?>