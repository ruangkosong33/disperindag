@extends('layouts.admin.b-master')

@section('title', 'Struktur Organisasi PPID')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Struktur Organisasi PPID</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($structureppid->isEmpty())
                        <a href="{{route('structureppid.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($structureppid as $structureppids)
                        <a href="{{route('structureppid.edit', $structureppids->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($structureppid as $structureppids)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$structureppids->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Gambar</td>
                            <td><img src="{{asset('storage/image-structure-ppid/' . $structureppids->image)}}" width="300px"></td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$structureppids->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

