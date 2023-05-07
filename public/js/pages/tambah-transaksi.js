let typeCloth

fetch(base_url + '/laundry/getTypeLaundry', {
    headers: {
        "X-CSRF-TOKEN": token
    },
    method: 'get',
})
.then((response) => response.json())
.then((data) => {
    console.log(data)
})

fetch(base_url + '/laundry/getDurationLaundry', {
    headers: {
        "X-CSRF-TOKEN": token
    },
    method: 'get',
})
.then((response) => response.json())
.then((data) => {
    console.log(data)
})

fetch(base_url + '/laundry/getTypeCloth', {
    headers: {
        "X-CSRF-TOKEN": token
    },
    method: 'get',
})
.then((response) => response.json())
.then((data) => {
    let option = ''
    for(let i=0 ; i < data.data.length ; i++) {
        const dt = data.data[i]
        console.log(dt)
        option += `<option value="${dt.id}">${dt.name}</option>`
    }
    $('.nama-produk').append(option)
    console.log(data)
})

$('#nama-customer').select2({
    placeholder: 'Pilih nama',
    ajax: {
        url: base_url + `/customer/select-name`,
        type: 'post',
        dataType: 'json',
        data: function(params) {
            return {
                search:params.term,
            }
        },
        processResults: function(response) {
            return {
                results: response,
            };
        },
        cache: true,
    }
})
// $('#nama-customer').on('keyup', () => {
//     if($('#nama-customer').val().length > 2) {
//         const name = $('#nama-customer').val()
//         const url = base_url + `/customer/get-data?name=${name}`
//         fetch(url, {
//             headers: {
//                 "X-CSRF-TOKEN": token
//             },
//             method: 'get',
//         })
//         .then((response) => response.json())
//         .then((data) => {
//             console.log(data)
//         })
//     }
// })

$('#tambah-produk').on('click', () => {
    const data_id = $('.product-choose').last().data('id')
    $('.product-choose').last().clone().appendTo('#product-choose-all')
    $('.product-choose').last().attr('data-id', data_id + 1);
    $('.product-delete').last().attr('data-id', data_id + 1);
    $('.jumlah-produk').last().val('')
    productDelete()
})

// modal tambah customer
$('#customer-phone-number').on('keyup', () => {
    if($('#customer-phone-number').val().length < 11) {
        $('#phone-number-validation').removeClass('d-none')
    } else {
        $('#phone-number-validation').addClass('d-none')
    }
})

$('#form-tambah-customer').on('submit', (event) => {
    event.preventDefault()
    const formData = new FormData(event.target);
    formData.append('_token', token)
    const url = base_url + '/customer/store-data';
    $.ajax({
        type: 'post',
        processData: false,
        contentType: false,
        data: formData,
        url: url,
        beforeSend: function() {
            swal.fire({
                title: "Loading...",
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: () => {
                    swal.showLoading();
                }
            });
        },
        success: (resp) => {
            Swal.close();
            Swal.fire('Sukses', 'Customer ditambahkan', 'success')
            $('#customer-name').val('')
            $('#customer-address').val('')
            $('#tambah-customer-modal').modal('hide')
        },
        error: (error) => {
            Swal.close();
            Swal.fire('Error', 'Gagal menambahkan customer', 'error')
            console.log(error)
        }
    })
})

// tambah transaksi

$('#form-tambah-transaksi').on('submit', (event) => {
    event.preventDefault();
    const formData = new FormData(this);
    const url = base_url + '/tambah-transaksi';
    $.ajax({
        type: 'post',
        processData: false,
        contentType: false,
        data: formData,
        url: url,
        beforeSend: function() {
            swal.fire({
                title: "Loading...",
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: () => {
                    swal.showLoading();
                }
            });
        },
        success: (resp) => {
            Swal.close();
            Swal.fire('Sukses', 'Transaksi ditambahkan', 'success')
        },
        error: (error) => {
            console.log(error)
        }
    })
})

function productDelete() {
    const productDelete = $('.product-delete')
    for(let i=0 ; i<productDelete.length ; i++) {
        const product = productDelete[i];
        product.addEventListener('click', () => {
            if($('.product-delete').length <= 1) {
                return
            }
            const data_id = product.getAttribute('data-id')
            const productChoose = $('.product-choose');
            for(let j=0 ; j<productChoose.length ; j++) {
                if(productChoose[j].getAttribute('data-id') == data_id) {
                    productChoose[j].remove();
                }
            }
        })
    }
}






