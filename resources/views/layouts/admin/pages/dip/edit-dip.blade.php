@extends('layouts.admin.b-master')

@section('title', 'Kategori DIP')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('dip.index')}}">Kategori Daftar Informasi Publik</a></li>
    <li class="breadcrumb-item active">Edit Kategori DIP</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('dip.update', $dip->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Kategori DIP"
                        value="{{old('title') ?? $dip->title}}">

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
