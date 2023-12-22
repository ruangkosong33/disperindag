@extends('layouts.admin.b-master')

@section('title', 'Standar Biaya')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Standar Biaya</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($costppid->isEmpty())
                        <a href="{{route('costppid.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($costppid as $costppids)
                        <a href="{{route('costppid.edit', $costppids->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($costppid as $costppids)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$costppids->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$costppids->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

