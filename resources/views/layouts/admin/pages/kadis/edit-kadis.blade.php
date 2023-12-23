@extends('layouts.admin.b-master')

@section('title', 'Kepala Dinas')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('kadis.index')}}">Kepala Dinas</a></li>
    <li class="breadcrumb-item active">Edit Kepala Dinas</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('kadis.update', $kadis->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Nama</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Kepala Dinas"
                        value="{{old('title') ?? $kadis->title}}">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <div class="mt-3"><img src="{{asset('storage/image-kadis/')}}" id="output" width="150"></div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="status">Periode</label>
                                <input type="text" class="form-control" name="periode"
                                value="{{old('periode') ?? $kadis->periode}}">

                            </div>

                        </div>

                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Deskripsi">{{ old('description', $kadis->description ?? '')}}</textarea>

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
