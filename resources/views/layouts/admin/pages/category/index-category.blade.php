@extends('layouts.admin.b-master')

@section('title', 'Kategori')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Kategori</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('category.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($category as $key=>$categorys)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$categorys->title}}</td>
                            <td>
                                <a href="{{route('category.edit', $categorys->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('category.destroy', $categorys->id)}}" class="d-inline">
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
