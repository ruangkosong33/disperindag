@extends('layouts.admin.b-master')

@section('title', 'Tugas Pokok & Fungsi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('task.index')}}">Tugas Pokok & Fungsi</a></li>
    <li class="breadcrumb-item active">Edit Tugas Pokok & Fungsi</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('task.update', $task->id)}}" method="POST">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" name="title" placeholder="Tugas Pokok & Fungsi"
                        value="{{old('title') ?? $task->title}}">
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Deskripsi">{{old('description', $task->description ?? '')}}</textarea>
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
