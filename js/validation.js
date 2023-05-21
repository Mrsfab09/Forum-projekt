const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === '') {
        setError(username, 'Nazwa użytkownika jest wymagana');
    }else if(usernameValue.length < 4 ){
		setError(username, 'Nazwa użytkownika musi mieć co najmniej 4 znaki')
	}
	else {
        setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'Email jest wymagany');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Podaj prawidłowy adres e-mail');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Hasło jest wymagane');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Hasło musi mieć co najmniej 8 znaków')
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'Potwierdź hasło');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Hasła nie pasują do siebie");
    } else {
        setSuccess(password2);
    }

};
