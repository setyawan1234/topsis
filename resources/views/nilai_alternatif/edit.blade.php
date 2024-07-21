<div class="modal fade text-start" id="editNilaiAlternatif-{{ $item->kode_alternatif }}" tabindex="-1"
    aria-labelledby="editNilaiAlternatif" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="font-weight-bold text-primary">Form Edit Nilai Alternatif</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('nilaialternatif.edit', $item->kode_alternatif) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="alternatif_id">Alternatif</label>
                        <select name="alternatif_id" id="alternatif_id" class="custom-select" required="required"
                            disabled>
                            <option value="{{ $item->alternatif_id }}" selected>
                                {{ $item->kode_alternatif_as_string }} - {{ $item->nama_alternatif }}
                            </option>
                        </select>
                    </div>
                    @foreach ($kriteria as $krit)
                    <div class="form-group my-3">
                        <label for="kriteria_id" class="mb-1">{{ $krit->kode_kriteria_as_string }} -
                            {{ $krit->nama_kriteria }}</label>

                        <input type="hidden" required="required" class="form-control" id="kode_alternatif"
                            name="kriteria_id{{ $krit->kode_kriteria }}" value="{{ $krit->kode_kriteria }}">

                        <select name="value{{ $krit->kode_kriteria }}" id="value{{ $krit->kode_kriteria }}"
                            class="custom-select" required="required">
                            <option value="" selected disabled hidden></option>
                            @foreach ($krit->subkriteria as $subkrit)
                            <option value="{{ $subkrit->id }}" @if ($item->
                                nilai_alt->where('kriteria_id',
                                $krit->kode_kriteria)->first()->subkriteria->bobot_subkriteria ==
                                $subkrit->bobot_subkriteria)
                                selected
                                @endif>
                                {{ $subkrit->nama_subkriteria }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endforeach
                    <div class="py-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('alternatif') }}" class="btn btn-danger" role="button" aria-disabled="true"
                            data-bs-dismiss="modal" style="margin-left:5px">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>