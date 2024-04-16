<?php
    include '../backend/connect.php';
    $sql = "SELECT * FROM tbluserprofile";
    $sql2 = "SELECT * FROM tblUserType";
    $result = mysqli_query($connection, $sql);
    $result2 = mysqli_query($connection, $sql2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css">
    <script src="../scripts/script.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header content">
            <div class="left">
                <h1>Harmonize</h1>
            </div>
            <div class="right">
                <ul class="nav-bar-content">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="register_page.php">Register</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Members</a></li>
                </ul>
                <button onclick="redirectLoginPage()">Login</button>
            </div>
        </div>
        <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Band/Label</th>
            <th>Band/Label Name</th>
        </tr>
    <?php
        while($row = mysqli_fetch_assoc ($result)){
            $row2 = mysqli_fetch_assoc ($result2);
            echo "<tr>";
            echo "<td>".$row['registerFname']."</td>";
            echo "<td>".$row['registerLname']."</td>";
            echo "<td>".$row['registerGender']."</td>";
            echo "<td>".$row2['registerType']."</td>";
            echo "<td>".$row2['registerTypeName']."</td>";
            echo "<tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>