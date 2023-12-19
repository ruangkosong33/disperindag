@extends('layouts.admin.b-master')

@section('title', 'Banner')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Banner</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('banner.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($banner as $key=>$banners)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$banners->title}}</td>
                            <td><img src="{{asset('storage/image-banner/'. $banners->image)}}" width="100px"></td>
                            <td>
                                <a href="{{route('banner.edit', $banners->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('banner.destroy', $banners->id)}}" class="d-inline">
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
