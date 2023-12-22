@extends('layouts.admin.b-master')

@section('title', 'Dasar Hukum')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('lawppid.index')}}">Dasar Hukum</a></li>
    <li class="breadcrumb-item active">Tambah Dasar Hukum</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('lawppid.store')}}" method="POST">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title_historical">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Dasar Hukum"
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
