@extends('layouts.admin.b-master')

@section('title', 'Agenda Kegiatan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('event.index')}}">Agenda Kegiatan</a></li>
    <li class="breadcrumb-item active">Edit Agenda Kegiatan</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Agenda Kegiatan"
                        value="{{old('title') ?? $event->title}}">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>

                        <textarea class="form-control" name="description" placeholder="Deskripsi Kegiatan">{{ old('description') }}</textarea>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date">Tanggal Kegiatan</label>
                                <input type="date" class="form-control" name="date"
                                value="{{old('date') ?? $event->date}}">

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="place">Tempat Acara</label>
                                <input type="text" class="form-control" name="place"
                                value="{{old('place') ?? $event->place}}">

                            </div>
                        </div>

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
