@extends('layouts.admin.b-master')

@section('title', 'Tata Cara Pengajuan Keberatan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Tata Cara Pengajuan Keberatan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('guidescruple.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Nama Pemohon</th>
                        <th>Kategori DIP</th>
                        <th>Email</th>
                        <th>No-Telepon</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($guidescruple as $key=>$guidescruples)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$guidescruples->name}}</td>
                            <td>{{$guidescruples->dip->title}}</td>
                            <td>{{$guidescruples->email}}</td>
                            <td>{{$guidescruples->phone}}</td>
                            <td>
                                <a href="{{route('guidescruple.edit', $guidescruples->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('guidescruple.destroy', $guidescruples->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('guidescruple.show', $guidescruples->id)}}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
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
@include('include.datepicker')

    @push('script')

        <script>
            $('.table').DataTable();
        </script>

    @endpush
