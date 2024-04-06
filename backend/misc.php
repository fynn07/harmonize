<?php
    $failed_register = "<script language='javascript'>
    let website_container = document.querySelector('.container');
    let flex_container = document.createElement('div');
    flex_container.style.cssText = 'display:flex; position: absolute; left: 0; right: 0; top: 5vh; background-color: transparent; justify-content: center; align-content: center';
    let error_container = document.createElement('div');
    error_container.className = 'error-message';
    let error_message = document.createElement('p');
    error_message.textContent = 'Error: Username Already Exists';
    error_container.appendChild(error_message);    
    flex_container.appendChild(error_container);
    website_container.appendChild(flex_container);
    </script>";

    $success_register = "<script language='javascript'>
    let website_container = document.querySelector('.container');
    let flex_container = document.createElement('div');
    flex_container.style.cssText = 'display:flex; position: absolute; left: 0; right: 0; top: 5vh; background-color: transparent; justify-content: center; align-content: center';
    let error_container = document.createElement('div');
    error_container.className = 'login-success';
    let error_message = document.createElement('p');
    error_message.textContent = 'Successfully Registered';
    error_container.appendChild(error_message);    
    flex_container.appendChild(error_container);
    website_container.appendChild(flex_container);
    </script>";

    $failed_login = "<script language='javascript'>
    let website_container = document.querySelector('.container');
    let flex_container = document.createElement('div');
    flex_container.style.cssText = 'display:flex; position: absolute; left: 0; right: 0; top: 5vh; background-color: transparent; justify-content: center; align-content: center';
    let error_container = document.createElement('div');
    error_container.className = 'error-message';
    let error_message = document.createElement('p');
    error_message.textContent = 'Login Failed: Account does not exist';
    error_container.appendChild(error_message);    
    flex_container.appendChild(error_container);
    website_container.appendChild(flex_container);
    </script>";

    $success_login = "<script language='javascript'>
    let website_container = document.querySelector('.container');
    let flex_container = document.createElement('div');
    flex_container.style.cssText = 'display:flex; position: absolute; left: 0; right: 0; top: 5vh; background-color: transparent; justify-content: center; align-content: center';
    let error_container = document.createElement('div');
    error_container.className = 'login-success';
    let error_message = document.createElement('p');
    error_message.textContent = 'Successfully Logged In';
    error_container.appendChild(error_message);    
    flex_container.appendChild(error_container);
    website_container.appendChild(flex_container);
    </script>";
    
    $echo_restart_register = "<script>
        setTimeout(() => {
            window.location='register_page.php';
        }, 2000);
        </script>";
    
    $echo_restart_login = "<script>
        setTimeout(() => {
            window.location='login_page.php';
        }, 2000);
        </script>";
?>