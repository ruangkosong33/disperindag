@extends('layouts.admin.b-master')

@section('title', 'Peraturan & Kebijakan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('policy.index')}}">Peraturan & Kebijakan</a></li>
    <li class="breadcrumb-item active">Edit Peraturan & Kebijakan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('policy.update', $policy->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Peraturan & Kebijakan"
                        value="{{old('title') ?? $policy->title}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Deskripsi">{{old('description', $policy->description ?? '')}}</textarea>
                    <x-slot name="footer">
                        <button type="button" onclick="history.back()" class="btn btn-dark" >Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>
                </x-card>
            </form>
        </div>
    </div>
@endsection
