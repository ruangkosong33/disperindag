@extends('layouts.admin.b-master')

@section('title', 'Agenda Kegiatan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Agenda Kegiatan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('event.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Tempat</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($event as $key=>$events)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::limit($events->title, '15', '...')}}</td>
                            <td>{{$events->description}}</td>
                            <td>{{$events->place}}</td>
                            <td>{{ \Carbon\Carbon::parse($events->date)->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{route('event.edit', $events->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('event.destroy', $events->id)}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="{{route('event.show', $events->id)}}" class="btn btn-info btn-sm">
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
