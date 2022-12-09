<div id="fill-dark-modal" class="modal fade bd-example-modal-md-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="fill-dark-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-filled">
            <div class="modal-header">
                <h4 class="modal-title" id="fill-dark-modalLabel">Edit Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('laporan.update', $data) }}" method="POST">
                    <input type="hidden" value="PATCH" name="_method">
                    @csrf

                    <div class="form-group">
                        <label class="bmd-label-floating">Nama</label>
                        <input class="form-control" type="text" name="nama" required="true" value="{{ $data->nama }}">
                        <label class="bmd-label-floating">Email</label>
                        <input class="form-control" type="text" name="email" required="true" value="{{ $data->email }}">
                        <label class="bmd-label-floating">Alamat</label>
                        <input class="form-control" type="text" name="alamat" required="true" value="{{ $data->alamat }}">
                        <label class="bmd-label-floating">Keterangan</label>
                        <textarea class="form-control" name="keterangan" id="" cols="10" rows="5">{{ $data->keterangan }}</textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" title="Simpan" class="btn btn-primary btn-rounded" onclick="return confirm('Apa anda yakin ingin menyimpan perubahan tersebut?')"><i class="ti-save"></i></button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>