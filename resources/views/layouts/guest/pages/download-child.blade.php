@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => $item->title])
@endsection

@section('content')
    {{-- @include('components.guest.program-kegiatan.index', [$items, 'route' => 'sop.front.year']) --}}
    <div class="container">
        <div class="row g-5 my-5">
            <div class="col-12">
                <h2 class="title text-center">{{$item->title}}</h2>
            </div>
            {{-- @include('components.guest.program-kegiatan.tahun', [$items, 'route'=>'download.front.detail']) --}}
        </div>
    </div>
@endsection

