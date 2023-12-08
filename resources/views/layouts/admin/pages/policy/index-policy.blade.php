@extends('layouts.admin.b-master')

@section('title', 'Peraturan & Kebijakan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Peraturan & Kebijakan</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    @if($policy->isEmpty())
                        <a href="{{route('policy.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                    @else
                    @foreach ($history as $historys)
                        <a href="{{route('policy.edit', $policy->id)}}" class="btn btn-warning"><i class="fas fa-plus-circle"></i> Edit</a>
                    @endforeach
                    @endif
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>Judul</th>
                        <th>Deskripsi</th>
                    </x-slot>
                        @foreach ($policy as $policys)
                        <tr>
                            <td width="38%">Sub Judul</td>
                            <td>{{$policys->title}}</td>
                        </tr>
                        <tr>
                            <td width="38%">Deskripsi</td>
                            <td>{!!$policys->description!!}</td>
                        </tr>
                        @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

