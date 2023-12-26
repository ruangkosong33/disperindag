@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Renja (Program dan Kinerja)'])
@endsection

@section('content')
    @include('components.guest.program-kegiatan.index', [$items, 'route' => 'renja.front.year'])
@endsection
