@extends('layouts.app')

@section('title', 'Alternatif')
@section('contents')
    <div class="card shadow mt-4">
        <div class="card-header">
            <h4 class="font-weight-bold text-primary">Data Alternatif</h4>
        </div>
        <div class="card-body" style="margin-top: -25p">
            {{-- tambah alternatif --}}
            @if (auth()->user()->role == 'admin')
                <a data-bs-toggle="modal" data-bs-target="#createAlternatif" class="btn btn-primary mb-3 ml-3">Tambah
                    Alternatif</a>
            @endif

            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center" id="DataTable" width="100%">
                    <thead>
                        <tr>
                            <th>Kode Alternaitf</th>
                            <th>Nama Alternaitf</th>
                            @if (auth()->user()->role == 'admin')
                                <th>Action</th>
                            @endif

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alternatif as $row)
                            <tr>
                                <td>{{ $row->kode_alternatif_as_string }}</td>
                                <td>{{ $row->nama_alternatif }}</td>
                                @if (auth()->user()->role == 'admin')
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editAlternatif-{{ $row->kode_alternatif }}"><i
                                                    class="bi bi-pencil"></i></a>
                                            @include('alternatif.edit')
                                            <a href="{{ route('alternatif.destroy', $row->kode_alternatif) }}"
                                                class="btn btn-danger delete-button" onclick="confirmationDel(event)"><i
                                                    class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                @endif

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('alternatif.create')
    </div>
@endsection
