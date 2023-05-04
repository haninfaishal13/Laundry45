<div class="modal fade" id="tambah-customer-modal" tabindex="-1" aria-labelledby="tambah-transaksi-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form-tambah-customer">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambah-transaksi-modal-label">Tambah Pelanggan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="customer-name">Nama:</label>
                        <input type="text" id="customer-name" name="name" class="form-control" placeholder="Input name">
                    </div>
                    <div class="mb-3">
                        <label for="customer-name">Nomor Telepon:</label>
                        <input type="text" id="customer-phone-number" name="phone_number" class="form-control" placeholder="Input nomor telepon">
                        <code class="d-none" id="phone-number-validation" style="color:red">Nomor Telepon tidak boleh kurang dari 11</code>
                    </div>
                    <div class="mb-3">
                        <label for="customer-address">Alamat:</label>
                        <textarea name="address" id="customer-address" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
