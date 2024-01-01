@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Unduh Berkas'])
@endsection

@section('content')
    {{-- @include('components.guest.program-kegiatan.index', [$items, 'route' => 'sop.front.year']) --}}
    <div class="container">
        <div class="row g-5 my-5">
            <div class="col-12">
                <h2 class="title text-center">Unduh Berkas</h2>
            </div>
            @include('components.guest.program-kegiatan.index', [$items, 'route'=>'download.front.child'])
        </div>
    </div>
@endsection

