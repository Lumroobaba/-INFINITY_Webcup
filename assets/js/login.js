const showHiddenPass = (loginPass, loginEye) => {
    const input = document.getElementById(loginPass),
        iconEye = document.getElementById(loginEye)

    iconEye.addEventListener('click', () => {
        if (input.type === 'password') {
            input.type = 'text'

            iconEye.classList.add('ri-eye-off-line')
            iconEye.classList.remove('ri-eye-line')
        } else { 
            input.type = 'password'
            iconEye.classList.remove('ri-eye-off-line')
            iconEye.classList.add('ri-eye-line')
        }
    })
} 

showHiddenPass('login-pass','login-eye')