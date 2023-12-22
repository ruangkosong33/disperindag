@extends('layouts.admin.b-master')

@section('title', 'Dasar Hukum')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dasar Hukum</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($lawppid->isEmpty())
                        <a href="{{route('lawppid.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($lawppid as $lawppids)
                        <a href="{{route('lawppid.edit', $lawppids->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($lawppid as $lawppids)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$lawppids->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$lawppids->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

