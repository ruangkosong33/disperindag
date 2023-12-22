@extends('layouts.admin.b-master')

@section('title', 'Waktu & Layanan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('serviceppid.index')}}">Waktu & Layanan</a></li>
    <li class="breadcrumb-item active">Tambah Waktu & Layanan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('serviceppid.store')}}" method="POST">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Waktu & Layanan"
                        value="{{old('title')}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Deskripsi">{{old('description')}}</textarea>
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
