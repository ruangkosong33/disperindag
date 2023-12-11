@extends('layouts.admin.b-master')

@section('title', 'File Indikator Kinerja Utama')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('fileiku.index', $iku->id)}}">File Indikator</a></li>
    <li class="breadcrumb-item active">Edit File Indikator</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('fileiku.update', ['iku'=>$iku, 'fileiku'=>$fileiku])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="File Indikator Kinerja Utama"
                        value="{{old('title') ?? $fileiku->title}}">

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
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>
            </form>
        </div>
    </div>
@endsection
