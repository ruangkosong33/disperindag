@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => $item->title])
@endsection

@section('content')
    <div class="container">
        <div class="row g-5 my-5">
            <div class="col-12">
                <div class="title">
                    <h3>{{ $item->title }} </h3>
                </div>
            </div>
            <div class="col-md-12">
                @if ($item->file)
                    <object style="width: 100%; height: 800px"
                        data="{{ asset('storage/file-download/' . $item->file) }}"></object>
                @else
                    Tidak ada File
                @endif
            </div>
            <div class="col-md-12">
                <div class="content-product text-center">
                    @if ($item->file)
                        <a class="btn btn-primary btn-lg" target="_blank" href="{{ asset('storage/file-download/' . $item->file) }}">Download File</a>
                    @else
                        Tidak ada berkas
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
