@extends('layouts.admin.b-master')

@section('title', 'Waktu & Layanan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('serviceppid.index')}}">Waktu & Layanan</a></li>
    <li class="breadcrumb-item active">Edit Waktu & Layanan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('serviceppid.update', $serviceppid->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Waktu & Layanan"
                        value="{{old('title') ?? $serviceppid->title}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Deskripsi">{{old('description', $servicepepid->description ?? '')}}</textarea>
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
