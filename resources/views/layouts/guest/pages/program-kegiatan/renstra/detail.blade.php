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
                    <h4>{{ $item->renstras->title }} {{ $item->renstras->year }} </h4>
                </div>
            </div>
            <div class="col-md-12">
                @if ($item->file)
                    <object style="width: 100%; height: 800px"
                        data="{{ asset('storage/file-renstra/' . $item->file) }}"></object>
                @else
                    Tidak ada File
                @endif
            </div>
            <div class="col-md-12">
                <div class="content-product text-center">
                    <a class="btn btn-primary btn-lg" href="">Download File</a>
                </div>
            </div>
        </div>
    </div>
@endsection
