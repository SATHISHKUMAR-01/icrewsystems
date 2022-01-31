var login_button = document.getElementById('login_button')
login_button.addEventListener('click', showofflogin)
    

var register_button = document.getElementById('register_button')
register_button.addEventListener('click', showoffregister)
 

var login = document.getElementById('login')

var register = document.getElementById('register')

register.style.display = 'none'

function showofflogin(e) {
    register.style.display = 'none'
    login.style.display = 'block'
}

function showoffregister(e) {
    login.style.display = 'none'
    register.style.display = 'block'
}

