<?php
    include 'backend/connect.php';
    $sql = "SELECT * FROM tbluserprofile";
    $result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <script src="scripts/script.js"></script>
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
                    <li><a href="index.php">Home</a></li>
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
        </tr>
    <?php
        while($row = mysqli_fetch_assoc ($result)){
            echo "<tr>";
            echo "<td>".$row['registerFname']."</td>";
            echo "<td>".$row['registerLname']."</td>";
            echo "<td>".$row['registerGender']."</td>";
            echo "<tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>