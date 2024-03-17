<?php
include("connect.php");
include("misc.php");
//global $connection;
?>

<?php
if(isset($_POST['loginBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql2 = "Select * from tbluseraccount where registerUsername='" . $username . "' AND registerPassword='" . $password . "'";
    $result = mysqli_query($connection, $sql2);
    $row = mysqli_num_rows($result);

    if($row == 0){
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