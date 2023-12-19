@extends('layouts.admin.b-master')

@section('title', 'Galeri Video')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Galeri Video</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('video.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Link</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($video as $key=>$videos)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($videos->title, '15', '...')}}</td>
                            <td><img src="{{asset('storage/image-video/' . $videos->image)}}" width="100px"></td>
                            <td>{{$videos->link}}</td>
                            <td>
                                <a href="{{route('video.edit', $videos->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('video.destroy', $videos->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('video.show', $videos->id)}}" class="btn btn-info btn-sm">
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
