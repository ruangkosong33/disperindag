@extends('layouts.admin.b-master')

@section('title', 'Artikel Berita')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('post.index')}}">Artikel Berita</a></li>
    <li class="breadcrumb-item active">Tambah Artikel Berita</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Artikel Berita">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="category_id">Kategori</label>

                                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">

                                    <option disabled selected>--Pilih--</option>
                                        @foreach ($category as $categorys)
                                    <option value={{$categorys->id}}>{{$categorys->title}}</option>
                                        @endforeach

                                </select>

                                @error('category_id')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date">Tanggal Publish</label>
                                <input type="date" class="form-control" name="date">

                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>

                        <textarea class="form-control" name="description" placeholder="Artikel Berita">{{ old('description') }}</textarea>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <div class="mt-3"><img src="" id="output" width="150"></div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="status">Status</label>

                                <select name="status" class="form-control">
                                    <option disabled selected>--Pilih--</option>
                                    <option value="Publish">Publish</option>
                                    <option value="Draft">Draft</option>
                                </select>

                            </div>

                        </div>

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
