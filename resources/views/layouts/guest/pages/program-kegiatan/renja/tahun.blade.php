@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Renja Tahun ' . $year])
@endsection

@section('content')
    <div class="container">
        <div class="row g-5 my-5">
            <div class="col-12">
                <h2 class="title text-center">Renja Tahun {{ $year }}</h2>
            </div>
            @include('components.guest.program-kegiatan.tahun', [$items, 'route'=>'renja.front.detail'])
        </div>
    </div>
@endsection
