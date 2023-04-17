$('#tambah-produk').on('click', () => {
    const data_id = $('.product-choose').last().data('id')
    $('.product-choose').last().clone().appendTo('#product-choose-all')
    $('.product-choose').last().attr('data-id', data_id + 1);
    $('.product-delete').last().attr('data-id', data_id + 1);
    $('.jumlah-produk').last().val('')
    productDelete()
})

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






