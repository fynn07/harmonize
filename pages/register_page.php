<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/register.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Karla:ital,wght@0,200..800;1,200..800&family=Pacifico&family=Poppins&family=Press+Start+2P&display=swap" rel="stylesheet">
    <script defer src="../scripts/script.js"></script>
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
                            <div class="gender-field-container">
                                <label for="gender_field">Gender</label>
                                <select name="gender" id="gender_field">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-layer-container">
                            <div class="username-container">
                                <label for="username_field">Username</label>
                                <input type="text" name="username" id="username_field" required maxlength="20">
                            </div>
                            <div class="password-container">
                                <label for="password_field">Password</label>
                                <input type="password" name="password" id="password_field" required minlength="6" maxlength="20">
                            </div>
                        </div>
                        <div class="form-layer-container">
                            <div class="band-name-container">
                                <label for="band_name_field">Band/Label Name</label>
                                <input type="text" name="usertypename" id="band_name_field" required maxlength="20">
                            </div>
                            <div class="user-type-container">
                                <label for="user_type_field">User Type</label>
                                <select name="usertype" id="gender_field">
                                    <option value="Band">Band</option>
                                    <option value="Label">Label</option>
                                </select>
                            </div>
                        </div>
                        <div class="button-container">
                            <button type="submit" name="registerBtn">Create Account</button>
                            <p >Already have an account..? <span><a href="login_page.php">LOGIN</a></span></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
   </div> 

</body>
</html>

<?php
include '../backend/register.php'
?>