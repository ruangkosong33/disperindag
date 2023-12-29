@extends('layouts.admin.b-master')

@section('title', 'Data Pegawai')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('employee.index')}}">Data Pegawai</a></li>
    <li class="breadcrumb-item active">Edit Data Pegawai</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <x-card>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="division_id">Divisi Bidang</label>

                                <select name="division_id" class="form-control @error('division_id') is-invalid @enderror">
                                    <option disabled selected>--Pilih--</option>
                                    @foreach ($division as $divisions)
                                      @if($divisions->id == $employee->division_id)
                                      <option value={{$divisions->id}} selected='selected'>{{$divisions->title}}</option>
                                      @endif
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
                                <input type="text" class="form-control" name="name" placeholder="Nama Lengkap"
                                value="{{old('name') ?? $employee->name}}">

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" name="nip" placeholder="Nomor Induk Pegawai"
                                value="{{old('nip') ?? $employee->nip}}">

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control" id="image" name="image"
                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                            </div>

                            <div class="mt-3"><img src="{{asset('storage/image-employee/' . $employee->image)}}" id="output" width="150"></div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="level">Level</label>

                                <select name="level" class="form-control">
                                    <option disabled selected>--Pilih--</option>
                                    <option value="1" {{ old('level', $employee->level) == 1 ? 'selected' : '' }}>Tenaga Alih Daya</option>
                                    <option value="2" {{ old('level', $employee->level) == 2 ? 'selected' : '' }}>Staff</option>
                                    <option value="3" {{ old('level', $employee->level) == 3 ? 'selected' : '' }}>Kepala Seksi</option>
                                    <option value="4" {{ old('level', $employee->level) == 4 ? 'selected' : '' }}>Kepala Bidang</option>
                                    <option value="5" {{ old('level', $employee->level) == 5 ? 'selected' : '' }}>Kepala UPTD</option>
                                </select>


                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="position">Jabatan</label>
                                <input type="text" class="form-control" name="position" placeholder="Jabatan"
                                value="{{old('position') ?? $employee->position}}">

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="education">Pendidikan</label>
                                <input type="text" class="form-control" name="education" placeholder="Pendidikan"
                                value="{{old('education') ?? $employee->education}}">

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="pim">Pim Diklat</label>
                                <input type="text" class="form-control" name="pim" placeholder="Pim Diklat"
                                value="{{old('pim') ?? $employee->pim}}">

                            </div>

                        </div>

                    </div>

                    <x-slot name="footer">
                        <button type="button" onclick="history.back()" class="btn btn-dark" >Kembali</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-slot>

                </x-card>

            </form>
        </div>
    </div>
@endsection
