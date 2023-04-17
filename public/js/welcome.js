$('#register').on('click', () => {
    $('#login').removeClass('active')
    $('#register').addClass('active')
    $('#login-page').addClass('d-none')
    $('#register-page').removeClass('d-none')
})

$('#login').on('click', () => {
    $('#login').addClass('active')
    $('#register').removeClass('active')
    $('#login-page').removeClass('d-none')
    $('#register-page').addClass('d-none')
})

$('#login-form').on('submit', (event) => {
    event.preventDefault();
    let formData = new FormData(event.target);
    const url = base_url + '/auth/login'
    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: formData,
    })
    .then((response) => {
        if(response.ok) {
            return response.json();
        }
        return response.text().then(text => {throw new Error(text)})
    })
    .then((data) => {
        const role = data.data.role;
        if(role == 'kasir') {
            window.location = base_url + '/dashboard'
        } else if(role == 'admin') {
            window.location = base_url + '/admin/dashboard'
        }
    })
    .catch((error) => {
        resp = JSON.parse(error.message)
        let messages = ``
        resp.message.forEach(element => {
            console.log(element)
            messages += `${element}<br>`
        });
        swal.fire('Error', messages, 'error')
    })
})

$('#register-form').on('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(event.target);
    const url = base_url + '/auth/register';
    fetch(url, {
        headers: {
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: formData,
    })
    .then((response) => {
        if(response.ok) {
            return response.json();
        }
        return response.text().then(text => {throw new Error(text)})
    })
    .then((data) => {
        window.location = base_url + '/dashboard'
    })
    .catch((error) => {
        console.log(error)
        resp = JSON.parse(error.message)
        let messages = ``
        resp.message.forEach(element => {
            console.log(element)
            messages += `${element}<br>`
        });
        swal.fire('Error', messages, 'error')
    })
})
