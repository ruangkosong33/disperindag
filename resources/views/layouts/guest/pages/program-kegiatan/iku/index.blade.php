@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Indikator Kinerja Utama (IKU)'])
@endsection

@section('content')
    @include('components.guest.program-kegiatan.index', [$items, 'route' => 'iku.front.year'])
@endsection
