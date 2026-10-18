function showAuthMode(mode) {
    const tabLogin = document.getElementById('tabBtnLogin');
    const tabRegister = document.getElementById('tabBtnRegister');
    const viewLogin = document.getElementById('loginFormView');
    const viewRegister = document.getElementById('registerFormView');
    const visualLogin = document.getElementById('loginVisual');
    const visualRegister = document.getElementById('registerVisual');

    if (mode === 'login') {
        tabLogin.classList.add('active');
        tabRegister.classList.remove('active');
        viewLogin.classList.add('active-view');
        viewRegister.classList.remove('active-view');
        visualLogin.style.display = 'block';
        visualRegister.style.display = 'none';
    } else {
        tabRegister.classList.add('active');
        tabLogin.classList.remove('active');
        viewRegister.classList.add('active-view');
        viewLogin.classList.remove('active-view');
        visualRegister.style.display = 'block';
        visualLogin.style.display = 'none';
    }
}