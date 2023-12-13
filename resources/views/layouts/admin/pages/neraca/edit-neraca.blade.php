@extends('layouts.admin.b-master')

@section('title', 'Neraca Keuangan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('neraca.index')}}">Neraca Keuangan</a></li>
    <li class="breadcrumb-item active">Tambah Neraca Keuangan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('neraca.store')}}" method="POST">
                @csrf
                @method('PUT')

                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Neraca Keuangan"
                        value="{{old('title') ?? $neraca->title}}">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Neraca Keuangan">{{old('description', $neraca->description ?? '')}}</textarea>
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
