<div class="modal fade" id="add-aturan" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editUserModalLabel">Tambah Aturan</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form action="{{ route('add-aturan') }}" class="needs-validation" novalidate="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
    <div class="form-group">
        <label for="edit-name">Kode penyakit</label>
        <input type="text" name="kode_penyakit" class="form-control"  placeholder="Masukkan Kode penyakit">
    </div>
    <div class="form-group">
        <label for="edit-email">Kode Gejala</label>
        <input type="text" name="kode_gejala" class="form-control"  placeholder="Masukkan Kode Gejala">
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
