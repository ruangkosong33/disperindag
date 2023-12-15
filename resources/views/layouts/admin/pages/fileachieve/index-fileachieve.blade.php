@extends('layouts.admin.b-master')

@section('title', 'Laporan & Capaian Kinerja')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('fileachieve.index', $achieve->id)}}">File Laporan & Capaian Kinerja</a></li>
    <li class="breadcrumb-item active">File Laporan & Capaian Kinerja</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('fileachieve.create', $achieve->id)}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($fileachieve as $key=>$fileachieves)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$fileachieves->title}}</td>
                            <td>{{$fileachieves->file}}</td>
                            <td>
                                <a href="{{route('fileachieve.edit', ['achieve'=>$achieve, 'fileachieve'=>$fileachieve])}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('fileachieve.destroy', ['achieve'=>$achieve, 'fileachieve'=>$fileachieve])}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

@include('include.datatable')

    @push('script')

        <script>
            $('.table').DataTable();
        </script>

    @endpush
