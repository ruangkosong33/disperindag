@extends('layouts.admin.b-master')

@section('title', 'Struktur Organisasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Struktur Organisasi</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($policy->isEmpty())
                        <a href="{{route('structure.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($structure as $structures)
                        <a href="{{route('structure.edit', $structures->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($structure as $structures)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$structures->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Gambar</td>
                            <td><img src="{{asset('public/image-structure'. $structures->image)}}"></td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$structures->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

