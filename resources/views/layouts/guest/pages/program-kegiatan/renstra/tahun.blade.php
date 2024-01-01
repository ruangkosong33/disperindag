@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Renstra Tahun ' . $year])
@endsection

@section('content')
    <div class="container">
        <div class="row g-5 my-5">
            <div class="col-12">
                <h2 class="title text-center">Renstra Tahun {{ $year }}</h2>
            </div>
            @include('components.guest.program-kegiatan.tahun', [$items, 'route'=>'renstra.front.detail'])
        </div>
    </div>
@endsection
