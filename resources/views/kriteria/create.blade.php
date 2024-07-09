<div class="modal fade text-start" id="createKriteria" tabindex="-1" aria-labelledby="createKriteria"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="font-weight-bold text-primary">
                    Form Tambah Kriteria</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('kriteria.create.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    
                    <div class="form-group py-3">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <input type="text" required="required" class="form-control" id="nama_kriteria"
                            name="nama_kriteria" value="">
                    </div>
                    
                    <div class="form-group py-3">
                        <label for="bobot_kriteria">Bobot Kriteria</label>
                        <input type="float" required="required" class="form-control" id="bobot_kriteria"
                            name="bobot_kriteria" value="">
                    </div>

                    <div class="form-group py-3">
                        <label for="attribute">Attribute</label>
                        <select name="attribute" id="attribute" class="custom-select" required="required">
                            <option value="" selected disabled hidden>-- Pilih attribute --
                            </option>
                            <option value="benefit">Benefit</option>
                            <option value="cost">Cost</option>
                        </select>
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