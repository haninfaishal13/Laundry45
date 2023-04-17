<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome-free/all.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetlaert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery/jquery-3.6.4.min.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom.js') }}"></script>
<script>
    const base_url = "{{url('/')}}"
    const token = $('[name="csrf_token"]').attr('content')

    $('#logout').on('click', () => {
        const url = base_url + '/auth/logout';
        fetch(url, {
            headers: {
                "X-CSRF-TOKEN": token
            },
            method: 'post',
        })
        .then((response) => {
            if(response.ok) {
                return response.json();
            }
            return response.text().then(text => {throw new Error(text)})
        })
        .then((data) => {
            window.location = base_url
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
</script>
