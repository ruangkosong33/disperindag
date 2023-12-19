@extends('layouts.admin.b-master')

@section('title', 'Galeri Foto')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('photo.index')}}">Galeri Foto</a></li>
    <li class="breadcrumb-item active">Edit Galeri Foto</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('photo.update', $photo->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Galeri Foto"
                        value="{{old('title')}}">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>

                        <textarea class="form-control" name="description" placeholder="Foto">{{old('description', $photo->description ?? '')}}</textarea>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date">Tanggal Publish</label>
                                <input type="date" class="form-control" name="date">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <div class="mt-3"><img src="" id="output" width="150"></div>
                        </div>

                    </div>

                    <x-slot name="footer">
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>
            </form>
        </div>
    </div>
@endsection
