@extends('layouts.admin.b-master')

@section('title', 'Galeri Foto')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Galeri Foto</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('photo.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($photo as $key=>$photos)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($photos->title, '15', '...')}}</td>
                            <td><img src="{{asset('storage/image-photo/' . $photos->image)}}" width="100px"></td>
                            <td>{{ \Carbon\Carbon::parse($photos->date)->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{route('photo.edit', $photos->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('photo.destroy', $photos->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('photo.show', $photos->id)}}" class="btn btn-info btn-sm">
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
