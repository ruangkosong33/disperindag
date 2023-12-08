@extends('layouts.admin.b-master')

@section('title', 'Kebijakan Mutu')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Kebijakan Mutu</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($regulation->isEmpty())
                        <a href="{{route('regulation.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($regulation as $regulations)
                        <a href="{{route('regulation.edit', $regulations->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($regulation as $regulations)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$regulations->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$regulations->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

