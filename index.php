<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Karla:ital,wght@0,200..800;1,200..800&family=Pacifico&family=Poppins&family=Press+Start+2P&display=swap" rel="stylesheet">
    <script defer src="script/script.js"></script>
    <title>Forms Page</title>
</head>
<body>
   <div class="container">
        <div class="left-side">
            <div class="company-name">
                <h1>Harmonize™</h1>
            </div>
            <div class="image-container">
                <img src="resources/logo_company.png" alt="bg">
            </div>
            <div class="flavor-text-container">
                <h2>Join over 1,000,000+ musicians in harmony</h2>
            </div>
        </div>
        <div class="right-side">
            <div class="forms-container">
                <form id="register_form" method="post">
                    <div class="form-header-container">
                        <h2>Get Started</h2>
                    </div>
                    <div class="form-layer-container">
                        <div class="firstname-field-container">
                            <label for="firstname_field">First Name</label>
                            <input type="text" name="firstname" id="firstname_field" required minlength="2" maxlength="20">
                        </div>
                        <div class="lastname-field-container">
                            <label for="lastname_field">Last Name</label>
                            <input type="text" name="lastname" id="lastname_field" required minlength="2" maxlength="20">
                        </div>
                    </div>
                    <div class="form-layer-container">
                        <div class="email-field-container">
                            <label for="email_field">Email</label>
                            <input type="email" name="email" id="email_field" required minlength="2" maxlength="50">
                        </div>
                        <div class="display-name-field-container">
                            <label for="display_name_field">Display Name</label>
                            <input type="text" name="displayname" id="display_name_field" minlength="2" required maxlength="20">
                        </div>
                    </div>
                    <div class="form-layer-container">
                        <div class="username-container">
                            <label for="username_field">Username</label>
                            <input type="text" name="username" id="username" required maxlength="20">
                        </div>
                        <div class="password-container">
                            <label for="password_field">Password</label>
                            <input type="password" name="password" id="password_field" required minlength="6" maxlength="20">
                        </div>

                    </div>
                    <div class="button-container">
                        <button type="submit" name="registerBtn">Create Account</button>
                        <p >Already have an account..? <span>LOGIN</span></p>
                    </div>

                </form>
                <button>Test</button>
            </div>
        </div>
   </div> 
</body>
</html>

<?php
include 'backend/register.php'
?>