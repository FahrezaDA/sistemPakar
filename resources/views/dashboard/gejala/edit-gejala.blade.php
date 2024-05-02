<!-- Modal Edit Data -->



<script>
    $(document).ready(function() {
        $('.edit-button').on('click', function(event) {
            var id_gejala = $(this).data('id_gejala');
            var kode_gejala = $(this).data('kode_gejala');
            var gejala = $(this).data('gejala');
            var nilai_densitas = $(this).data('nilai_densitas');

            var modal = $('#edit-gejala');
            modal.find('.modal-body #id_gejala').val(id_gejala);
            modal.find('.modal-body #kode_gejala').val(kode_gejala);
            modal.find('.modal-body #gejala').val(gejala);
            // modal.find('.modal-body #foto_produk').val(foto_produk); // Ini tidak bisa di-set secara langsung karena input tipe file
            modal.find('.modal-body #nilai_densitas').val(nilai_densitas);

            modal.modal('show');
        });
    });
</script>




<div class="modal fade" id="edit-gejala" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editUserModalLabel">Edit Gejala</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Form for editing user data -->
            @if ($data->count() == 0)
            <p>data kosong</p>
        @else
            <form  action="{{route('update-gejala',$data->id_gejala)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group" @style('display:none;')>
                    <label for="edit-id_gejala">Name</label>
                    <input type="text" name="id_gejala"  class="form-control" id="id_gejala" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="edit-kode_gejala">Kode Gejala</label>
                    <input type="text" name="kode_gejala"  class="form-control" id="kode_gejala" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="edit-gejala">Gejala</label>
                    <input type="text" name="gejala" class="form-control" id="gejala"  placeholder="Enter email">

                </div>
                <div class="form-group">
                    <label for="edit-harga">Nilai Densitas</label>
                    <input type="text" name="nilai_densitas" class="form-control" id="nilai_densitas" placeholder="Enter harga">
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
