@extends('layouts.admin.b-master')

@section('title', 'Harga Komoditi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Harga Komodoti</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('commodity.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($commodity as $key=>$commoditys)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$commoditys->title}}</td>
                            <td><img src="{{asset('storage/image-commodity/'. $commoditys->image)}}" width="100px"></td>
                            <td>{{$commoditys->price}}</td>
                            <td>{{ \Carbon\Carbon::parse($commoditys->date)->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{route('commodity.edit', $commoditys->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('commodity.destroy', $commoditys->id)}}" class="d-inline">
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
