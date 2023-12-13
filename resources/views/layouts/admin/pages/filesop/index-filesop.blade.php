@extends('layouts.admin.b-master')

@section('title', 'File SOP')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('sop.index')}}">SOP</a></li>
    <li class="breadcrumb-item active">File SOP</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('filesop.create', $sops->id)}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($sop->filesop as $key=>$filesops)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$filesops->title}}</td>
                            <td>{{$filesops->file}}</td>
                            <td>
                                <a href="{{route('filesop.edit', ['sop'=>$sop, 'filesop'=>$filesop])}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('filesop.destroy', ['sop'=>$sop, 'filesop'=>$filesop])}}" class="d-inline">
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
