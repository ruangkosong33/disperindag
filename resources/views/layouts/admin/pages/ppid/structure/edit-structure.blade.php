@extends('layouts.admin.b-master')

@section('title', 'Struktur Organisasi PPID')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('structureppid.index')}}">Struktur Organisasi PPID</a></li>
    <li class="breadcrumb-item active">Edit Struktur Organisasi PPID</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('structureppid.update', $structureppid->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Struktur Organisasi"
                        value="{{old('title') ?? $structureppid->title}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Struktur Organisasi">{{old('description'), $structureppid->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image"
                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                    </div>

                    <div class="mt-3"><img src="{{asset('storage/image-structure-ppid/' . $structureppid->image)}}" id="output" width="150"></div>

                    <x-slot name="footer">
                        <button type="button" onclick="history.back()" class="btn btn-dark" >Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>

            </form>
        </div>
    </div>
@endsection
