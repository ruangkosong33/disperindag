@extends('layouts.admin.b-master')

@section('title', 'Program & Kinerja')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Program & Kinerja</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('perform.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tahun</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($perform as $performs)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$performs->title}}</td>
                            <td>{{$performs->year}}</td>
                            <td>
                                <a href="{{route('perform.edit', $performs->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('perform.destroy', $performs->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('fileperform.index', $performs->id)}}" class="btn btn-info btn-sm">
                                    <i class="fas fa-list"></i>
                                </a>
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
