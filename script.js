const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-register');
const registerLink = document.querySelector('.register.php');
const btnPopup = document.querySelector('.btnlogin-popup');

registerLink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});
