@extends('layouts.admin.b-master')

@section('title', 'Kepala Dinas')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Kepala Dinas</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('kadis.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Periode</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($kadis as $Key=>$kadiss)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$kadiss->title}}</td>
                            <td><img src="{{asset('storage/image-kadis/' . $kadiss->image)}}" width="100px"></td>
                            <td>{{$kadiss->periode}}</td>
                            <td>
                                <a href="{{route('kadis.edit', $kadiss->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('kadis.destroy', $kadiss->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                {{-- <a href="{{route('post.show', $posts->id)}}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a> --}}
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
