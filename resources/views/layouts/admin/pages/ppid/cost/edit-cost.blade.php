@extends('layouts.admin.b-master')

@section('title', 'Standar Biaya')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('costppid.index')}}">Standar Biaya</a></li>
    <li class="breadcrumb-item active">Edit Standar Biaya</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('costppid.update', $costppid->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Standar Biaya"
                        value="{{old('title') ?? $costppid->title}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Deskripsi">{{old('description', $costppid->description ?? '')}}</textarea>
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
