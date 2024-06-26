<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Karla:ital,wght@0,200..800;1,200..800&family=Pacifico&family=Poppins&family=Press+Start+2P&display=swap" rel="stylesheet">
    <script defer src="../script/script.js"></script>
    <title>Forms Page</title>
</head>
<body>
    <div class="container">
        <div class="header-content">
            <div class="header content">
                <div class="left">
                    <h1>Harmonize</h1>
                </div>
                <div class="right">
                    <ul class="nav-bar-content">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="register_page.php">Register</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="table_page.php">Members</a></li>
                    </ul>

                    <button onclick="redirectLoginPageIndex()">Login</button>
                </div>
            </div>
        </div>

        <div class="content">
                <div class="left-side">
                    <div class="image-container">
                        <img src="../resources/logo_company.png" alt="bg">
                    </div>
                    <div class="flavor-text-container">
                        <h2>Join over 1,000,000+ musicians in harmony</h2>
                    </div>
                </div>
                <div class="right-side">
                    <div class="forms-container">
                        <form class="register_form" method="post">
                            <div class="form-header-container">
                                <h2>Login Page</h2>
                            </div>
                            
                            <div class="form-layer-container">
                                <div class="username-field-container">
                                    <label for="username_field">Username</label>
                                    <input type="text" id="username_field" name="username">
                                </div>
                                <div class="for-layer-container">
                                    <label for="password_field">Password</label>
                                    <input type="password" id="password_field" name="password">
                                </div>
                            </div>

                            <div class="button-container">
                                <button type="submit" name="loginBtn">Login</button>
                                <p >Don't have an account..? <span><a href="register_page.php">Sign Up</a></span></p>
                                
                            </div>
        
                        </form>
                    </div>
                </div>
            </div> 
        </div>
 </body>
</html>

<?php
include("../backend/login.php");
?>