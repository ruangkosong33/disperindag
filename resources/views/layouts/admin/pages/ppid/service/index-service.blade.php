@extends('layouts.admin.b-master')

@section('title', 'Waktu & Layanan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Waktu & Layanan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($serviceppid->isEmpty())
                        <a href="{{route('serviceppid.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($serviceppid as $serviceppids)
                        <a href="{{route('serviceppid.edit', $serviceppids->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($serviceppid as $serviceppids)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$serviceppids->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$serviceppids->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

