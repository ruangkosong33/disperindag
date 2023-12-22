@extends('layouts.admin.b-master')

@section('title', 'Dasar Hukum')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('lawppid.index')}}">Dasar Hukum</a></li>
    <li class="breadcrumb-item active">Edit Dasar Hukum</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{'lawppid.update', $lawppid->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Dasar Hukum"
                        value="{{old('title') ?? $lawppid->title}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Deskripsi">{{old('description', $lawppid->description ?? '')}}</textarea>
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
