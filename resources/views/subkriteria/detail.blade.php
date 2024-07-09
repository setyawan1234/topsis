@extends('layouts.app')

@section('title', 'Detail Keterangan Kriteria')
@section('contents')
    <div class="card shadow mt-4">
        <div class="card-header">
            <h4 class="font-weight-bold text-primary">Detail Keterangan Kriteria - {{ $kriteria->nama_kriteria }}</h4>
        </div>
        <div class="card-body" style="margin-top: -25p">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center" id="DataTable" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Keterangan Kriteria</th>
                            <th class="text-start">Rating Keterangan Kriteria</th>
                            @if (auth()->user()->role == 'admin')
                                <th>Action</th>
                            @endif

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subkriteria as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama_subkriteria }}</td>
                                <td class="text-center">{{ $item->bobot_subkriteria }}</td>
                                @if (auth()->user()->role == 'admin')
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editSubkriteria-{{ $item->id }}"><i
                                                    class="bi bi-pencil"></i></a>
                                            @include('subkriteria.edit')
                                            <a href="{{ route('subkriteria.destroy', $item->id) }}"
                                                class="btn btn-danger"onclick="confirmationDel(event)"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
