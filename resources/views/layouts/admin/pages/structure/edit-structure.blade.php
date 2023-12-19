@extends('layouts.admin.b-master')

@section('title', 'Struktur Organisasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('structure.index')}}">Struktur Organisasi</a></li>
    <li class="breadcrumb-item active">Edit Struktur Organisasi</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('structure.update', $structure->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Struktur Organisasi"
                        value="{{old('title') ?? $structure->title}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Struktur Organisasi">{{old('description'), $structure->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                    </div>

                    <div class="mt-3"><img src="{{asset('storage/image-structure/' . $structure->image)}}" id="output" width="150"></div>

                    <x-slot name="footer">
                        <button type="button" onclick="history.back()" class="btn btn-dark" >Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>

            </form>
        </div>
    </div>
@endsection
