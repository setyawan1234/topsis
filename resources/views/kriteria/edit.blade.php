<div class="modal fade text-start" id="editKriteria-{{ $row->kode_kriteria }}" tabindex="-1" aria-labelledby="editKriteria"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="m-0 font-weight-bold text-primary">
                    Form Edit Kriteria</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('kriteria.edit', $row->kode_kriteria) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group py-3">
                        <label for="nama_kriteria">Nama Kriteria</label>
                        <input type="text" class="form-control" required="required"
                            id="nama_kriteria" name="nama_kriteria" value="{{ $row->nama_kriteria }}">
                    </div>
                    <div class="form-group py-3">
                        <label for="bobot_kriteria">Bobot Kriteria</label><br>
                        <input type="float" class="form-control" name="bobot_kriteria"
                            value="{{ isset($row) ? $row->bobot_kriteria : '' }}">
                    </div>
                    <div class="form-group py-3">
                        <label for="attribute">Attribute</label>
                        <select name="attribute" required="required" id="attribute"
                            class="custom-select">
                            {{-- <option value="" selected disabled hidden>-- Pilih Attribute --</option> --}}
                            <option value="cost"{{ $row->attribute == 'cost' ? 'selected' : '' }}>
                                Cost
                            </option>
                            <option value="benefit"{{ $row->attribute == 'benefit' ? 'selected' : '' }}>
                                Benefit
                            </option>
                        </select>
                    </div>

                    <div class="py-3">
                        <button type="submit" class="simpan btn btn-primary">Simpan</button>
                        <a href="{{ route('kriteria') }}" class="btn btn-danger" role="button" aria-disabled="true"
                            style="margin-left:5px" data-bs-dismiss="modal">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
