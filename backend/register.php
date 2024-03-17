<?php
include("connect.php");
include("misc.php");
//global $connection;
?>

<script src="../script/script.js"></script>

<?php
if (isset($_POST['registerBtn'])) {
    //retrieve data from form and save the value to a variable
    //for tbluserprofile
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];

    $email = $_POST['email'];
    $uname = $_POST['username'];
    $pword = $_POST['password'];

    //Check tbluseraccount if username is already existing. Save info if false. Prompt msg if true.
    $sql2 = "Select * from tbluseraccount where registerUsername='" . $uname . "'";
    $result = mysqli_query($connection, $sql2);
    $row = mysqli_num_rows($result);

    if ($row == 0) {
    //save data to tbluserprofile
        $sql1 = "Insert into tbluserprofile(registerFname, registerLname, registerGender) values('" . $fname . "','" . $lname . "','" . $gender . "')";
        mysqli_query($connection, $sql1);

        $sql = "Insert into tbluseraccount(registerUsername, registerPassword, registerEmail) values('" . $uname . "','" . $pword . "','" . $email . "')";
        mysqli_query($connection, $sql);
        echo "<script language='javascript'>
        alert('New record saved.');
        </script>";
    } else {
        echo $error;
    }

    echo"<script>
        setTimeout(() => {
            window.location='index.php';
        }, 2000);
        </script>";
}
?>