@extends('layouts.admin.b-master')

@section('title', 'Visi & Misi PPID')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('visionppid.index')}}">Visi & Misi PPID</a></li>
    <li class="breadcrumb-item active">Edit Visi & Misi PPID</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('visionppid.store')}}" method="POST">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Visi & Misi PPID"
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
