<!-- Modal Edit Data -->



<script>
    $(document).ready(function() {
        $('.edit-button').on('click', function(event) {
            var id_aturan = $(this).data('id_aturan');
            var kode_penyakit = $(this).data('kode_penyakit');
            var kode_gejala = $(this).data('kode_gejala');


            var modal = $('#edit-aturan');
            modal.find('.modal-body #id_aturan').val(id_aturan);
            modal.find('.modal-body #kode_penyakit').val(kode_penyakit);
            modal.find('.modal-body #kode_gejala').val(kode_gejala);
            // modal.find('.modal-body #foto_produk').val(foto_produk); // Ini tidak bisa di-set secara langsung karena input tipe file


            modal.modal('show');
        });
    });
</script>




<div class="modal fade" id="edit-aturan" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editUserModalLabel">Edit Aturan</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Form for editing user data -->
            @if ($data->count() == 0)
            <p>data kosong</p>
        @else
            <form  action="{{route('update-aturan',$data->id_aturan)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group" @style('display:none;')>
                    <label for="edit-id_aturan">Name</label>
                    <input type="text" name="id_aturan"  class="form-control" id="id_aturan" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="edit-kode_penyakit">Kode penyakit</label>
                    <input type="text" name="kode_penyakit"  class="form-control" id="kode_penyakit" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="edit-gejala">Kode Gejala </label>
                    <input type="text" name="kode_gejala" class="form-control" id="kode_gejala"  placeholder="Enter email">

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
