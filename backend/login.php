<?php

include("connect.php");
include("misc.php");
include("register.php");
//global $connection;
?>

<?php
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_check = "SELECT registerPassword from tbluseraccount where registerUsername='" .$username . "'";
    $hashed_pass = mysqli_query($connection, $sql_check);
    $hashed_pass_new = mysqli_fetch_assoc($hashed_pass);

    $is_pass = password_verify($password, $hashed_pass_new['registerPassword']);

    if($is_pass == false){
        echo $failed_login;
    }
    else{
        echo $success_login;
    }
    
    echo"<script>
        setTimeout(() => {
            window.location='login_page.php';
        }, 2000);
        </script>";
}

?>