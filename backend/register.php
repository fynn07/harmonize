<?php
include("connect.php");
//global $connection;
?>

<?php

if (isset($_POST['registerBtn'])) {
    //retrieve data from form and save the value to a variable
    //for tbluserprofile
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dsplyname = $_POST['displayname'];
    // echo "<script language='javascript'>
    //     alert('hi nin');
    // </script>";
    //for tbluseraccount
    $email = $_POST['email'];
    $uname = $_POST['username'];
    $pword = $_POST['password'];

    //save data to tbluserprofile
    $sql1 = "Insert into tbluserprofile(registerFname, registerLname, registerDsplyname) values('" . $fname . "','" . $lname . "','" . $dsplyname . "')";
    mysqli_query($connection, $sql1);

    //Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
    $sql2 = "Select * from tbluseraccount where registerUsername='" . $uname . "'";
    $result = mysqli_query($connection, $sql2);
    $row = mysqli_num_rows($result);

    if ($row == 0) {
        $sql = "Insert into tbluseraccount(registerUsername, registerPassword, registerEmail) values('" . $uname . "','" . $pword . "','" . $email . "')";
        mysqli_query($connection, $sql);
        echo "<script language='javascript'>
        alert('New record saved.');
        </script>";
    } else {
        echo "<script language='javascript'>
                        alert('Username already existing');
                  </script>";
    }

    echo"<script>
        window.location='index.php';
        </script>";
}
?>