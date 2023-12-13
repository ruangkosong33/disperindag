@extends('layouts.admin.b-master')

@section('title', 'SOP')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('sop.index')}}">Standar Operasional Prosedur</a></li>
    <li class="breadcrumb-item active">Edit SOP</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('sop.update', $sop->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Standar Operasional Prosedur"
                        value="{{old('title') ?? $sop->title}}">

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
