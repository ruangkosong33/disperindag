@extends('layouts.admin.b-master')

@section('title', 'Tata Cara Permohonan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Tata Cara Permohonan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('guideinformation.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
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
                    @foreach ($guideinformation as $key=>$guideinformations)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$guideinformations->name}}</td>
                            <td>{{$guideinformations->dip->title}}</td>
                            <td>{{$guideinformations->email}}</td>
                            <td>{{$guideinformations->phone}}</td>
                            <td>
                                <a href="{{route('guideinformation.edit', $guideinformations->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('guideinformation.destroy', $guideinformations->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('guideinformation.show', $guideinformations->id)}}" class="btn btn-info btn-sm">
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
