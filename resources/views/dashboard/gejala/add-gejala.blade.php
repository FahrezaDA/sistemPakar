<div class="modal fade" id="add-gejala" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editUserModalLabel">Tambah Gejala</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form action="{{ route('add-gejala') }}" class="needs-validation" novalidate="" method="POST">
            @csrf
    <div class="form-group">
        <label for="edit-kode_gejala">Kode Gejala</label>
        <input type="text" name="kode_gejala" class="form-control"  placeholder="Masukkan Kode Gejala">
    </div>
    <div class="form-group">
        <label for="edit-gejala">Gejala</label>
        <input type="text" name="gejala" class="form-control"  placeholder="Masukkan Gejala">
    </div>
    <div class="form-group">
        <label for="edit-nilai_densitas">Nilai Densitas</label>
        <input type="text" name="nilai_densitas" class="form-control"  placeholder="Masukkan Nilai Densitas">
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
