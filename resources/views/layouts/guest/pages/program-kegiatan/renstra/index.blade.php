@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Renstra'])
@endsection

@section('content')
    @include('components.guest.program-kegiatan.index', [
        $items,
        'route' => 'renstra.front.year'
    ])
@endsection
