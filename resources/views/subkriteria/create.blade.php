<div class="modal fade text-start" id="createSubkriteria-{{ $subkrit->kode_kriteria }}" tabindex="-1"
    aria-labelledby="createSubkriteria" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="text-primary">
                    Subkriteria - {{ $subkrit->nama_kriteria }}</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('subkriteria.create.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    Keterangan nilai bobot:<br>
                    1. Sangat Penting = 5<br>
                    2. Penting = 4<br>
                    3. Cukup = 3<br>
                    4. Kurang = 2<br>
                    5. Sangat Kurang = 1
                    {{-- <div class="form-group py-3">
                        <label for="id">Kode Keterangan Kriteria</label>
                        <input type="number" required="required" class="form-control" id="id"
                            name="id" value="">
                    </div> --}}
                    <div class="d-flex py-3 gap-9">
                        <div class="form-group">
                            <label for="nama_subkriteria" style="font-weight: 700">Nama Subkriteria</label>
                            <input type="text" class="form-control" required id="nama_subkriteria"
                                name="nama_subkriteria" value="{{ $subkrit->nama_subkriteria }}">
                        </div>
                        <div class="form-group">
                            <label for="bobot_subkriteria" style="font-weight: 700">Bobot</label>
                            <select class="custom-select" id="bobot_subkriteria" name="bobot_subkriteria" required>
                                <option value="1" {{ $subkrit->bobot_subkriteria == '1' ? 'selected' : '' }}>1
                                </option>
                                <option value="2" {{ $subkrit->bobot_subkriteria == '2' ? 'selected' : '' }}>2
                                </option>
                                <option value="3" {{ $subkrit->bobot_subkriteria == '3' ? 'selected' : '' }}>3
                                </option>
                                <option value="4" {{ $subkrit->bobot_subkriteria == '4' ? 'selected' : '' }}>4
                                </option>
                                <option value="5" {{ $subkrit->bobot_subkriteria == '5' ? 'selected' : '' }}>5
                                </option>
                            </select>
                        </div>
                        <input type="hidden" name="kode_kriteria" value="{{ $subkrit->kode_kriteria }}">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="simpan btn btn-primary">Simpan</button>
                        <a href="{{ route('subkriteria') }}" class="btn btn-danger" role="button" aria-disabled="true"
                            style="margin-left:5px" data-bs-dismiss="modal">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
