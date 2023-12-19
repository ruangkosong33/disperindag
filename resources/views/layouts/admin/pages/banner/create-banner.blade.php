@extends('layouts.admin.b-master')

@section('title', 'Banner')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('banner.index')}}">Data Banner</a></li>
    <li class="breadcrumb-item active">Tambah Data Banner</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Banner">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                    </div>

                    <div class="mt-3"><img src="" id="output" width="150"></div>

                    <x-slot name="footer">
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>
            </form>
        </div>
    </div>
@endsection
