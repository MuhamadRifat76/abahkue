    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('testimoni.store') }}" method="post">
                    @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <label for="nama">Deskripsi</label>
                  <textarea name="deskripsi" id="" cols="10px" width="100">
            </div>
            </textarea>
               <input required type="file" class="form-control" name="foto" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                 </div>
                  <input type="text" readonly id="prepend-big-btn" disabled>
                                        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
        </div>
    </div>
</div>
