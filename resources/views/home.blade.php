@extends('layouts.app')

@section('contents')
    <div class="card shadow-sm mt-4">
        <div class="card-header">
            <h4 class="font-weight-bold text-primary">Dashboard</h4>
        </div>
        <div class="row my-2 mx-2" id="click_kriteria">
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm my-2">
                    <a href="{{ route('kriteria') }}" data-cy="kriteria-link">
                        <div class="card-body rounded" style="background-color: #F5F5F9">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-uppercase mb-1" style="font-weight: 600">Jumlah
                                        Kriteria
                                    </div>
                                    <div class="h5">{{ $kriteria }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-journal-plus" style="font-size: 25px"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm my-2">
                    <a href="{{ route('alternatif') }}" data-cy="alternatif-link">
                        <div class="card-body rounded" style="background-color: #F5F5F9">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-uppercase mb-1" style="font-weight: 600">Jumlah
                                        Alternatif
                                    </div>
                                    <div class="h5">{{ $alternatif }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-map" style="font-size: 25px"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm my-2">
                    <a href="{{ route('subkriteria') }}" data-cy="keterangan-kriteria-link">
                        <div class="card-body rounded" style="background-color: #F5F5F9">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-uppercase mb-1" style="font-weight: 600">Jumlah
                                        Ket.Kriteria
                                    </div>
                                    <div class="h5">{{ $subkriteria }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-map" style="font-size: 25px"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
