@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'LPPD'])
@endsection

@section('content')
    @include('components.guest.program-kegiatan.index', [$items, 'route' => 'lppd.front.year'])
@endsection
