@extends('layouts.admin.b-master')

@section('title', 'Data Pegawai')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Pegawai</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('employee.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Bidang</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($employee as $key=>$employees)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$employees->division->title}}</td>
                            <td>{{$employees->name}}</td>
                            <td><img src="{{asset('storage/image-employee/' . $employees->image)}}" width="100px"></td>
                            <td>{{$employees->position}}</td>
                            <td>
                                <a href="{{route('employee.edit', $employees->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('employee.destroy', $employees->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('employee.show', $employees->id)}}" class="btn btn-info btn-sm">
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
