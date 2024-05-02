<!-- Modal Edit Data -->



<script>
    $(document).ready(function() {
        $('.edit-button').on('click', function(event) {
            var id_penyakit = $(this).data('id_penyakit');
            var kode_penyakit = $(this).data('kode_penyakit');
            var nama_penyakit = $(this).data('nama_penyakit');
            var deskripsi_penyakit = $(this).data('deskripsi_penyakit');
            var solusi = $(this).data('solusi');

            var modal = $('#edit-penyakit');
            modal.find('.modal-body #id_penyakit').val(id_penyakit);
            modal.find('.modal-body #nama_penyakit').val(nama_penyakit);
            modal.find('.modal-body #kode_penyakit').val(kode_penyakit);
            modal.find('.modal-body #deskripsi_penyakit').val(deskripsi_penyakit);
            modal.find('.modal-body #solusi').val(solusi);
            // modal.find('.modal-body #foto_produk').val(foto_produk); // Ini tidak bisa di-set secara langsung karena input tipe file


            modal.modal('show');
        });
    });
</script>




<div class="modal fade" id="edit-penyakit" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editUserModalLabel">Edit Penyakit</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Form for editing user data -->
            @if ($data->count() == 0)
            <p>data kosong</p>
        @else
            <form  action="{{route('update-penyakit',$data->id_penyakit)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group" @style('display:none;')>
                    <label for="edit-id_penyakit">ID Penyakit</label>
                    <input type="text" name="id_penyakit"  class="form-control" id="id_penyakit" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="edit-kode_penyakit">Kode Penyakit</label>
                    <input type="text" name="kode_penyakit"  class="form-control" id="kode_penyakit" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="edit-kode_gejala">Nama Penyakit</label>
                    <input type="text" name="nama_penyakit"  class="form-control" id="nama_penyakit" placeholder="Enter Penyakit">
                </div>
                <div class="form-group">
                    <label for="edit-deskripsi_penyakit">Deskripsi Penyakit</label>
                    <input type="text" name="deskripsi_penyakit" class="form-control" id="deskripsi_penyakit"  placeholder="Enter Deskripsi Penyakit">

                </div>
                <div class="form-group">
                    <label for="edit-solusi">Solusi</label>
                    <input type="text" name="solusi" class="form-control" id="solusi" placeholder="Enter Solusi">
                </div>




                <!-- Tombol Submit untuk mengirimkan formulir -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            @endif
        </div>
    </div>
</div>
</div>
