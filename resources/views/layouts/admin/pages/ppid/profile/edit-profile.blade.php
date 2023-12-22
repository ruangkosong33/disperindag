@extends('layouts.admin.b-master')

@section('title', 'Profile PPID')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('profileppid.index')}}">Profile PPID</a></li>
    <li class="breadcrumb-item active">Edit Profile PPID</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{'profileppid.update', $profileppid->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Profile PPID"
                        value="{{old('title') ?? $profileppid->title}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Deskripsi">{{old('description', $profileppid->description ?? '')}}</textarea>
                    </div>

                    <x-slot name="footer">
                        <button type="button" onclick="history.back()" class="btn btn-dark" >Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>
            </form>
        </div>
    </div>
@endsection
