@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'LKJIP'])
@endsection

@section('content')
    @include('components.guest.program-kegiatan.index', [$items, 'route' => 'lkjip.front.year'])
@endsection
