@extends('layouts.admin.b-master')

@section('title', 'Struktur Organisasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('structure.index')}}">Struktur Organisasi</a></li>
    <li class="breadcrumb-item active">Tambah Struktur Organisasi</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('structure.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Struktur Organisasi">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Struktur Organisasi"></textarea>
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
