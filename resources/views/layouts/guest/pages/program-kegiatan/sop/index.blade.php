@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'SOP (Standart Operational Procedure)'])
@endsection

@section('content')
    {{-- @include('components.guest.program-kegiatan.index', [$items, 'route' => 'sop.front.year']) --}}
    <div class="container">
        <div class="row g-5 my-5">
            <div class="col-12">
                <h2 class="title text-center">SOP (Standart Operational Procedure)</h2>
            </div>
            @include('components.guest.program-kegiatan.tahun', [$items, 'route'=>'sop.front.year'])
        </div>
    </div>
@endsection

