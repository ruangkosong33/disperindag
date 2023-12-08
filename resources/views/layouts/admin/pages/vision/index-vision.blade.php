@extends('layouts.admin.b-master')

@section('title', 'Visi & Misi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Visi & Misi</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($vision->isEmpty())
                        <a href="{{route('vision.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($vision as $visions)
                        <a href="{{route('vision.edit', $vision->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($vision as $visions)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$visions->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$visions->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection
