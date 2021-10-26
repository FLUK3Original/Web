const form = document.querySelector('#user-form');
const nameInput = document.querySelector('#felhasznalonev');
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');
const botnameInput = document.querySelector('#botname');
const meghivoInput = document.querySelector('#meghivo');
const leirasInput = document.querySelector('#leiras');
const roleInput = document.querySelector('#role');
const message = document.querySelector('.message');
const userList = document.querySelector('#userlist');

form.addEventListener('submit', onSubmit);

function onSubmit(ev) {
    ev.preventDefault();

    if (nameInput.value === '' || !nameInput.value.includes('#')) {
        message.classList.add('error');
        message.innerHTML = 'Üres mezőt nem hagyhatsz ki!';
        clearError();
    } else if(emailInput.value === '' || !emailInput.value.includes('@')){
        message.classList.add('error');
        message.innerHTML = 'Üres mezőt nem hagyhatsz ki!';
        clearError();
    } else if(passwordInput.value === ''){
        message.classList.add('error');
        message.innerHTML = 'Üres mezőt nem hagyhatsz ki!';
        clearError();
    } else if(botnameInput.value === '' || !botnameInput.value.includes('#')){
        message.classList.add('error');
        message.innerHTML = 'Üres mezőt nem hagyhatsz ki!';
        clearError();
    } else if(meghivoInput.value === '' || !meghivoInput.value.includes('authorize')){
        message.classList.add('error');
        message.innerHTML = 'Üres mezőt nem hagyhatsz ki!';
        clearError();
    } else if(leirasInput.value === ''){
        message.classList.add('error');
        message.innerHTML = 'Üres mezőt nem hagyhatsz ki!';
        clearError();
    } else {
        const li = document.createElement('li');
        li.appendChild(document.createTextNode(`Kedves ${nameInput.value}! sikeresen elküldted a hírdetésedet ami már csak ellenőrzésre vár! Minden adatodat elküldtük a következő email címre: ${emailInput.value}.`))

        userList.appendChild(li);

        nameInput.value = '';
        emailInput.value = '';
    }
}
function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function clearError() {
    setTimeout(() => {
        message.classList.remove('error');
        message.innerHTML = '';
    }, 2000)
}