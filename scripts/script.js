//new branch
function errorMessage(){
    let website_container = document.querySelector('.container');
    let flex_container = document.createElement('div');
    flex_container.style.cssText = "display:flex; position: absolute; left: 0; right: 0; top: 5vh; background-color: transparent; justify-content: center; align-content: center";
    let error_container = document.createElement('div');
    error_container.className = "error-message";
    let error_message = document.createElement('p');
    error_message.textContent = "Error: Username Already Exists";
    error_container.appendChild(error_message);    
    flex_container.appendChild(error_container);
    website_container.appendChild(flex_container);
    setTimeout(() => {
        website_container.removeChild(flex_container);
    }, 2000)
}

function displayUserType(){
    let website_container = document.querySelector('.container');
    
}

function redirectLoginPage(){
    window.location = '../pages/login_page.php';
}

function redirectLoginPageIndex(){
    window.location = '../pages/login_page.php';
}

function test(){
    alert("hello");
}
