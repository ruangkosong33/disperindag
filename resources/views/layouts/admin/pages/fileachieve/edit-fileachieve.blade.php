@extends('layouts.admin.b-master')

@section('title', 'File Laporan & Capaian Kinerja')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('fileachieve.index', $achieve->id)}}">File Laporan & Capaian Kinerja</a></li>
    <li class="breadcrumb-item active">Edit File Kinerja</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('fileachieve.update', ['achieve'=>$achieve, 'fileachieve'=>$fileachieve])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title"
                        value="{{old('title') ?? $fileachieve->title}}"placeholder="File Laporan & Capaian Kinerja">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" class="form-control @error('file') ?? is-invalid @enderror" name="file">

                        @error('file')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

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
