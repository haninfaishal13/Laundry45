//Frontsite

//Auth
$('#register-confirm-password').keyup(() => {
    const password = $('#register-password').val();
    const confirm_password = $('#register-confirm-password').val();
    console.log(confirm_password)
    if(password == '') {
        $('#confirm-password-warning').removeClass('d-none');
    }
    if(confirm_password == '') {
        $('#confirm-password-warning').addClass('d-none');
    }
    if(password == confirm_password) {
        $('#confirm-password-warning').addClass('d-none');
    } else {
        $('#confirm-password-warning').removeClass('d-none');
    }
})
$('#register-password').keyup(() => {
    const password = $('#register-password').val()
    const confirm_password = $('#register-confirm-password').val()
    if(confirm_password == '') {
        $('#confirm-password-warning').addClass('d-none');
    } else {
        if(password == confirm_password) {
            $('#confirm-password-warning').addClass('d-none');
        } else {
            $('#confirm-password-warning').removeClass('d-none');
        }
    }
})

// Backsite
const sidebar = document.querySelectorAll('.sidebar > ul > li');
for(let i=0 ; i < sidebar.length ; i++) {
    sidebar[i].addEventListener("click", () => {
        if(!sidebar[i].classList.contains('sidebar-dropdown')) {
            document.querySelectorAll('.sidebar > ul > li.active')[0].classList.remove('active')
            sidebar[i].classList.add('active');
        }
    })
}

const btn_sidebar = document.querySelector('#btn-sidebar-toggle')
if(btn_sidebar) {
    btn_sidebar.addEventListener("click", () => {
        const side_nav = document.querySelector('#side-nav')
        const main_content = document.querySelectorAll('.main-content');
        if(window.innerWidth > 767) {
            side_nav.classList.toggle('nonactive')
            for(let j=0; j<main_content.length ; j++) {
                main_content[j].classList.toggle('full')
            }
        } else {
            side_nav.classList.toggle('active')
        }
    })
}

const btn_sidebar_close = document.querySelector('#close-btn')
if(btn_sidebar_close) {
    btn_sidebar_close.addEventListener("click", () => {
        const side_nav = document.querySelector('#side-nav')
        side_nav.classList.remove('active')
    })
}

const sidebar_dropdown = document.getElementsByClassName('sidebar-dropdown');
for(let i=0 ; i<sidebar_dropdown.length ; i++) {
    const dropdown = sidebar_dropdown[0];
    dropdown.addEventListener('click', () => {
        const target_dropdown_id = dropdown.getAttribute('dropdown-target');
        const target_dropdown = document.getElementById(target_dropdown_id);
        target_dropdown.classList.toggle('d-none')
    })
}
