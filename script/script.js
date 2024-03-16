
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

const test_button = document.querySelector("#testButton");

test_button.addEventListener('click', () => {
    errorMessage();
})