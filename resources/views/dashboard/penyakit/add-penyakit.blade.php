<div class="modal fade" id="add-penyakit" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editUserModalLabel">Tambah Data Penyakit</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form action="{{ route('add-penyakit') }}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
    <div class="form-group">
        <label for="edit-name">Kode Penyakit</label>
        <input type="text" name="kode_penyakit" class="form-control"  placeholder="Masukkan Kode Penyakit">
    </div>
    <div class="form-group">
        <label for="edit-email">Nama Penyakit</label>
        <input type="text" name="nama_penyakit" class="form-control"  placeholder="Masukkan Nama Penyakit">
    </div>
    <div class="form-group">
        <label for="edit-area">Deskripsi Penyakit</label>
        <input type="text" name="deskripsi_penyakit" class="form-control"  placeholder="Masukkan Deskripsi Penyakit">
    </div>
    <div class="form-group">
        <label for="edit-area">Solusi</label>
        <input type="text" name="solusi" class="form-control"  placeholder="Masukkan Solusi">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>

        </div>

    </div>
</div>
</div>
