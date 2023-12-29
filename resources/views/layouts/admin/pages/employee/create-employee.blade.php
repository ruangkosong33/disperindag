@extends('layouts.admin.b-master')

@section('title', 'Data Pegawai')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('employee.index')}}">Data Pegawai</a></li>
    <li class="breadcrumb-item active">Tambah Data Pegawai</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="division_id">Divisi Bidang</label>

                                <select name="division_id" class="form-control @error('division_id') is-invalid @enderror">

                                    <option disabled selected>--Pilih--</option>
                                        @foreach ($division as $divisions)
                                    <option value={{$divisions->id}}>{{$divisions->title}}</option>
                                        @endforeach

                                </select>

                                @error('division_id')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" name="nip" placeholder="Nomor Induk Pegawai">

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <div class="mt-3"><img src="" id="output" width="150"></div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="level">Level</label>

                                <select name="level" class="form-control">
                                    <option disabled selected>--Pilih--</option>
                                    <option value="1">Tenaga Alih Daya</option>
                                    <option value="2">Staf</option>
                                    <option value="3">Kepala Seksi</option>
                                    <option value="4">Kepala Bidang</option>
                                    <option value="5">Kepala UPTD</option>
                                </select>

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="position">Jabatan</label>
                                <input type="text" class="form-control" name="position" placeholder="Jabatan">

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="education">Pendidikan</label>
                                <input type="text" class="form-control" name="education" placeholder="Pendidikan">

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pim">Pim Diklat</label>
                                <input type="text" class="form-control" name="pim" placeholder="Pim Diklat">

                            </div>

                        </div>

                    </div>

                    <x-slot name="footer">
                        <button type="reset" class="btn btn-dark">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>
            </form>
        </div>
    </div>
@endsection
