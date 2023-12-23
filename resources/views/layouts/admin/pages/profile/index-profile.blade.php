@extends('layouts.admin.b-master')

@section('title', 'Profile Dinas')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Profile Dinas</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($profile->isEmpty())
                        <a href="{{route('profile.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($profile as $profiles)
                        <a href="{{route('profile.edit', $profiles->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($profile as $profiles)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$profiles->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$profiles->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

