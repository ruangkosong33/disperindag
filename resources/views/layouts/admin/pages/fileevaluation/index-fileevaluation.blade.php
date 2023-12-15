@extends('layouts.admin.b-master')

@section('title', 'File Monitoring Evaluasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('evaluation.index')}}">File Monitoring Evaluasi</a></li>
    <li class="breadcrumb-item active">File Monitoring Evaluasi</li>
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <x-slot name="header">
                    <a href="{{route('fileevaluaton.store', $evaluation->id)}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</a>
                </x-slot>

                <x-table>
                    <x-slot name="thead">
                        <th>No</th>
                        <th>Judul</th>
                        <th>File</th>
                        <th>Action</th>
                    </x-slot>
                    @foreach ($fileevaluation as $key=>$fileevaluations)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$fileevaluations->title}}</td>
                            <td>{{$fileevaluations->file}}</td>
                            <td>
                                <a href="{{route('fileevaluation.edit', ['evaluation'=>$evaluation, 'fileevaluation'=>$fileevaluation])}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('fileevaluation.destroy', ['evaluation'=>$evaluation, 'fileevaluation'=>$fileevaluation])}}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete" onclick="return confirm('Yakin Ingin Menghapus Data?')">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </x-table>
            </x-card>
        </div>
    </div>

@endsection

@include('include.datatable')

    @push('script')

        <script>
            $('.table').DataTable();
        </script>

    @endpush
