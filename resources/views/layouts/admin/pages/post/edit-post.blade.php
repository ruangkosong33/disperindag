@extends('layouts.admin.b-master')

@section('title', 'Artikel Berita')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('post.index')}}">Artikel Berita</a></li>
    <li class="breadcrumb-item active">Edit Artikel Berita</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('post.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Artikel Berita"
                        value="{{old('title') ?? $post->title}}">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                
                                <select name="category_id" class="form-control @error('category') is-invalid @enderror">
                                    <option disabled selected>--Pilih--</option>
                                    @foreach ($category as $categorys)
                                      @if($categorys->id == $post->category_id)
                                      <option value={{$categorys->id}} selected='selected'>{{$categorys->title}}</option>
                                      @endif
                                    @endforeach
                                </select>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date">Tanggal Publish</label>
                                <input type="date" class="form-control" name="date"
                                value="{{old('date') ?? $post->date}}">

                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>

                        <textarea class="form-control" name="description" placeholder="Artikel Berita">{{old('description', $post->description ?? '')}}</textarea>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <div class="mt-3"><img src="{{asset('storage/image-post/'. $post->image)}}" id="output" width="150"></div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="status">Status</label>

                                <select name="status" class="form-control">
                                    <option disabled selected>--Pilih--</option>
                                    <option value="Publish"{{ old('status') == 'Publish' ? 'selected' : ($post->status === 'Publish' ? 'selected' : '') }}>Publish</option>
                                    <option value="Draft"{{ old('status') == 'Draft' ? 'selected' : ($post->status === 'Draft' ? 'selected' : '') }}>Draft</option>
                                </select>

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
