@extends('layouts.admin.b-master')

@section('title', 'Profile PPID')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Profile </li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($profileppid->isEmpty())
                        <a href="{{route('profileppid.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($profileppid as $profileppids)
                        <a href="{{route('profileppid.edit', $profileppids->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($profileppid as $profileppids)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$profileppids->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$profileppids->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

