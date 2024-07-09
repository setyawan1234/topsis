@extends('layouts.app')

@section('title', 'Kriteria')
@section('contents')
    <div class="card shadow mt-3">
        <div class="card-header">
            <h4 class="font-weight-bold text-primary">Data Kriteria</h4>
        </div>
        <div class="card-body" style="margin-top: -25p">
            {{-- tambah kriteria --}}
            @if (auth()->user()->role == 'admin')
                <a data-bs-toggle="modal" data-bs-target="#createKriteria" class="btn btn-primary mb-3 ml-3">Tambah
                    Kriteria</a>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center" id="DataTable" width="100%">
                    <thead>
                        <tr>
                            <th>Kode Kriteria</th>
                            <th>Nama Kriteria</th>
                            <th class="text-start">Bobot Kriteria</th>
                            <th>Attribute</th>
                            @if (auth()->user()->role == 'admin')
                                <th>Action</th>
                            @endif

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kriteria as $row)
                            <tr>
                                <td>{{ $row->kode_kriteria_as_string }}</td>
                                <td>{{ $row->nama_kriteria }}</td>
                                <td class="text-center">{{ $row->bobot_kriteria }}</td>
                                <td>
                                    <div class="py-1 rounded-3"
                                        style="{{ $row->attribute == 'cost' ? 'background-color: #F5B7B1; color:#801515; font-weight: 600;' : 'background-color: #DCFCE7; color:#15803D; font-weight: 600;' }}">
                                        {{ $row->attribute == 'cost' ? 'Cost' : 'Benefit' }}
                                    </div>
                                </td>

                                @if (auth()->user()->role == 'admin')
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editKriteria-{{ $row->kode_kriteria }}"><i
                                                    class="bi bi-pencil"></i></a>
                                            @include('kriteria.edit')
                                            <a href="{{ route('kriteria.destroy', $row->kode_kriteria) }}"
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
        @include('kriteria.create')
    </div>
@endsection
