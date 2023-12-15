@extends('layouts.admin.b-master')

@section('title', 'File Unduhan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('filedownload.index', $download->id)}}">File Unduhan</a></li>
    <li class="breadcrumb-item active">Tambah File Unduhan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('filedownload.store', $download->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="File Unduhan">

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
