@extends('layouts.admin.b-master')

@section('title', 'Tata Cara Pengajuan Keberatan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('guidescruple.index')}}">Tata Cara Pengajuan Keberatan</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('guidescruple.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card>

                    <h4><strong>Identitas Pemohon</strong></h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') ?? is-invalid @enderror" name="name" placeholder="Nama Lengkap Anda">

                                @error('name')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="dip_id">Kategori Permohonan</label>

                                <select name="dip_id" class="form-control @error('dip_id') is-invalid @enderror">

                                    <option disabled selected>--Pilih--</option>
                                        @foreach ($dip as $dips)
                                    <option value={{$dips->id}}>{{$dips->title}}</option>
                                        @endforeach

                                </select>

                                @error('dip_id')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control @error('address') ?? is-invalid @enderror" name="address" placeholder="Alamat Lengkap">

                                @error('address')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control @error('email') ?? is-invalid @enderror" name="email" placeholder="E-Mail">

                                @error('email')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="number" class="form-control @error('phone') ?? is-invalid @enderror" name="phone" placeholder="Nomor Telepon">

                                @error('phone')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="job">Pekerjaan</label>
                                <input type="text" class="form-control @error('job') ?? is-invalid @enderror" name="job" placeholder="Pekerjaan">

                                @error('email')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>
                        </div>

                    </div>

                    <br>

                    <h4><strong>Data Pemohon</strong></h4>

                    <div class="form-group">
                        <label for="applicantdata">Rincian Informasi</label>

                        <textarea class="form-control @error('applicantdata') is-invalid @enderror" name="applicantdata" placeholder="Deskripsi Rincian Informasi">{{ old('applicantdata') }}</textarea>

                        @error('applicantdata')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="objective">Tujuan Penggunaan Informasi</label>

                        <textarea class="form-control @error('objective') is-invalid @enderror" name="objective" placeholder="Deskripsi Tujuan Penggunaan Informasi">{{ old('objective') }}</textarea>

                        @error('objective')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="obtaion">Cara Memperoleh Informasi</label>
                        <br>
                        <input type="radio" name="obtaion" value="1">Melihat
                        <input type="radio" name="obtaion" value="2">Membaca
                        <input type="radio" name="obtaion" value="3">Mendengarkan
                        <input type="radio" name="obtaion" value="4">Mencatat

                    </div>

                    <div class="form-group">
                        <label for="copy">Mendapatkan Salinan Informasi</label>
                        <br>
                        <input type="radio" name="copy" value="1">Softcopy
                        <input type="radio" name="copy" value="2">Hardcopy
                    </div>

                    <div class="form-group">
                        <label for="obation">Cara Mendapatkan Salinan Informasi</label>
                        <br>
                        <input type="radio" name="method" value="1">Mengambil Langsung
                        <input type="radio" name="method" value="2">Faksimili
                        <input type="radio" name="method" value="3">Email

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
