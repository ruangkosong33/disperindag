@extends('layouts.admin.b-master')

@section('title', 'Visi & Misi PPID')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Visi & Misi PPID</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($visionppid->isEmpty())
                        <a href="{{route('visionppid.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($visionppid as $visioppids)
                        <a href="{{route('visionppid.edit', $visionppids->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($visionppid as $visionppids)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$visionppids->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$visionppids->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

