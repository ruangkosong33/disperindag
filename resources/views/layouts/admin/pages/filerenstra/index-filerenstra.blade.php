@extends('layouts.admin.b-master')

@section('title', 'File Rencana Strategis')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('renstra.index')}}">Rencana Strategis</a></li>
    <li class="breadcrumb-item active">File Rencana Strategis</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('filerenstra.create', $renstra->id)}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($renstra->filerenstras as $key=>$filerens)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$filerens->title}}</td>
                            <td>{{$filerens->file}}</td>
                            <td>
                                <a href="{{route('filerenstra.edit', ['renstra'=>$renstra, 'filerenstra'=>$filerens])}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('filerenstra.destroy', ['renstra'=>$renstra, 'filerenstra'=>$filerens])}}" class="d-inline">
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
