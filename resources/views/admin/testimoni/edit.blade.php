<div class="modal fade bd-example-modal-lg-{{$data->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('testimoni.update', $data->id) }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" value="{{$data->nama}}" required>
                </div>
                <div class="form-group">
                    <label for="nama">Deskripsi</label>
                <textarea name="deskripsi" id="cke" cols="30" width="10">{{$data->deskripsi}}</textarea>
            </div>
            <div class="form-group">
            <img src="{{asset('assets/img/testimoni/' .$data->foto. '')}}"style="width:50px; height:50px;" alt="Foto">
            <input required type="file" class="form-control" value="{{$data->foto}}" name="foto">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('ckeditor/ckeditor/ckeditor.js')}}"></script>
<script>
CKEDITOR.replace('cke');
</script>
