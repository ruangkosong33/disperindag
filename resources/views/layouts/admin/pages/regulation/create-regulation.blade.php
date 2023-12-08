@extends('layouts.admin.b-master')

@section('title', 'Kebijakan Mutu')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('regulation.index')}}">Kebijakan Mutu</a></li>
    <li class="breadcrumb-item active">Tambah Kebijakan Mutu</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('regulation.store')}}" method="POST">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Kebijakan Mutu">

                        @error('title')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror
                        
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Kebijakan Mutu"></textarea>
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
