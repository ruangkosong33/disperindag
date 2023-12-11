@extends('layouts.admin.b-master')

@section('title', 'File Indikator Kinerja Utama')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('iku.index')}}">Indikator Kinerja Utama</a></li>
    <li class="breadcrumb-item active">File Indikator</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('fileiku.create', $iku->id)}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($iku->fileikus as $key=>$filekus)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$filekus->title}}</td>
                            <td>{{$filekus->file}}</td>
                            <td>
                                <a href="{{route('fileiku.edit', ['iku'=>$iku, 'fileiku'=>$filekus])}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('fileiku.destroy', ['iku'=>$iku, 'fileiku'=>$filekus])}}" class="d-inline">
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
