@extends('layouts.admin.b-master')

@section('title', 'Rencana Strategis')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('renstra.index')}}">Rencana Strategis</a></li>
    <li class="breadcrumb-item active">Tambah Rencana Strategis</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('renstra.store')}}" method="POST">
                @csrf
                <x-card>

                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') ?? is-invalid @enderror" name="title" placeholder="Rencana Strategis">

                        @error('title')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="year">Tahun</label>
                        <input type="number" class="form-control @error('year') ?? is-invalid @enderror" name="year" placeholder="Rencana Strategis">

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
