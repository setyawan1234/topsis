<div class="modal fade text-start" id="createAlternatif" tabindex="-1" aria-labelledby="createAlternatif"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="font-weight-bold text-primary">
                    Form Tambah Alternatif</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('alternatif.create.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group py-3">
                        <label for="kode_alternatif">Kode Alternaitf</label>
                        <input type="number" required="required" class="form-control" id="kode_alternatif"
                            name="kode_alternatif" value="">
                    </div>
                    <div class="form-group py-3">
                        <label for="nama_alternatif">Nama Alternaitf</label>
                        <input type="text" required="required" class="form-control" id="nama_alternatif"
                            name="nama_alternatif" value="">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="simpan btn btn-primary">Simpan</button>
                        <a href="{{ route('alternatif') }}" class="btn btn-danger" role="button" aria-disabled="true"
                            data-bs-dismiss="modal" style="margin-left:5px">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>