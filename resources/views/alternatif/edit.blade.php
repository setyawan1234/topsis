<div class="modal fade text-start" id="editAlternatif-{{ $row->kode_alternatif }}" tabindex="-1"
    aria-labelledby="editAlternatif" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="font-weight-bold text-primary">
                    Form Edit Alternatif</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('alternatif.edit', $row->kode_alternatif) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group py-3">
                        <label for="kode_alternatif">Kode Alternaitf</label>
                        <input type="number" class="form-control" required="required" id="kode_alternatif"
                            name="kode_alternatif" value="{{ $row->kode_alternatif }}" disabled>
                    </div>
                    <div class="form-group py-3">
                        <label for="nama_alternatif">Nama Alternatif</label>
                        <input type="text" class="form-control" required="required" id="nama_alternatif"
                            name="nama_alternatif" value="{{ $row->nama_alternatif }}">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                        <a href="{{ route('alternatif') }}" class="btn btn-danger" role="button" aria-disabled="true"
                            style="margin-left:5px" data-bs-dismiss="modal">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
