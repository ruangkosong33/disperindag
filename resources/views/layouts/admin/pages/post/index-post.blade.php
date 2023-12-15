@extends('layouts.admin.b-master')

@section('title', 'Artikel Berita')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Artikel Berita</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('post.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($post as $key=>$posts)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($posts->title, '15', '...')}}</td>
                            <td><img src="{{asset('storage/image-post/' . $posts->image)}}" width="100px"></td>
                            <td>{{ \Carbon\Carbon::parse($posts->date)->format('d-m-Y') }}</td>
                            <td>
                                <span class="badge badge-{{ $posts->statusColor() }}">{{ $posts->status }}</span>
                            </td>
                            <td>
                                <a href="{{route('post.edit', $posts->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('post.destroy', $posts->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('post.show', $posts->id)}}" class="btn btn-info btn-sm">
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
