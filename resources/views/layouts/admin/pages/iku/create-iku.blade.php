@extends('layouts.admin.b-master')

@section('title', 'Indikator Kinerja Utama')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('iku.index')}}">Indikator Kinerja Utama</a></li>
    <li class="breadcrumb-item active">Tambah Indikator Kinerja Utama</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('iku.store')}}" method="POST">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Indikator Kinerja Utama">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="year">Tahun</label>
                        <input type="number" class="form-control @error('year') ?? is-invalid @enderror" name="year" placeholder="Indikator Kinerja Utama">

                        @error('year')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

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
