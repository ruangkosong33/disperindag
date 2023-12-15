@extends('layouts.admin.b-master')

@section('title', 'File Kategori Daftar Informasi Publik')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('dip.index')}}">Kategori DIP</a></li>
    <li class="breadcrumb-item active">File Kategori DIP</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('filedip.create', $dip->id)}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($filedip as $key=>$filedips)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$filedips->title}}</td>
                            <td>{{$filedips->file}}</td>
                            <td>
                                <a href="{{route('filedip.edit', ['dip'=>$dip, 'filedip'=>$filedip])}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('filedip.destroy', ['dip'=>$dip, 'filedip'=>$filedip])}}" class="d-inline">
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
