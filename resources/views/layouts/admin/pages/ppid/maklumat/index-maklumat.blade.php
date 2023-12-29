@extends('layouts.admin.b-master')

@section('title', 'Maklumat Pelayanan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Maklumat Pelayanan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($maklumatppid->isEmpty())
                        <a href="{{route('maklumatppid.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($maklumatppid as $maklumatppids)
                        <a href="{{route('maklumatppid.edit', $maklumatppids->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($maklumatppid as $maklumatppids)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$maklumatppids->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$maklumatppids->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

