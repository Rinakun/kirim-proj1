function togglePassword() {  
    const passwordInput = document.getElementById('password');  
    const toggleButton = document.querySelector('.toggle-password');  

    if (passwordInput.type === 'password') {  
        passwordInput.type = 'text';  
        toggleButton.src = '/images/eye-slash-icon.png';  
    } else {  
        passwordInput.type = 'password';  
        toggleButton.src = '/images/eye-icon.png';  
    }  
}