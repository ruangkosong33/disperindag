@extends('layouts.admin.b-master')

@section('title', 'Rencana Strategis')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('download.index')}}">Unduhan</a></li>
    <li class="breadcrumb-item active">Edit Unduhan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('download.update', $download->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Unduhan"
                        value="{{old('title') ?? $download->title}}">

                        @error('title')
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
