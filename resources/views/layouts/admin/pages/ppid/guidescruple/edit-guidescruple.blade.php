@extends('layouts.admin.b-master')

@section('title', 'Tata Cara Pengajuan Keberatan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"><a href="{{route('guidescruple.index')}}">Tata Cara Pengajuan Keberatan</a></li>
    <li class="breadcrumb-item active">Edit Data</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('guidescruple.update', $guidescruple->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-card>

                    <h4><strong>Identitas Pemohon</strong></h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') ?? is-invalid @enderror" name="name" placeholder="Nama Lengkap Anda"
                                value="{{old('name') ?? $guidescruple->name}}">

                                @error('name')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="dip_id">Kategori</label>

                                <select name="dip_id" class="form-control @error('dip_id') is-invalid @enderror">
                                    <option disabled selected>--Pilih--</option>
                                    @foreach ($dip as $dips)
                                      @if($dips->id == $guidescruple->dip_id)
                                      <option value={{$dips->id}} selected='selected'>{{$dips->title}}</option>
                                      @endif
                                    @endforeach
                                </select>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control @error('address') ?? is-invalid @enderror" name="address" placeholder="Alamat Lengkap"
                                value="{{old('address') ?? $guidescruple->address}}">

                                @error('address')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" class="form-control @error('email') ?? is-invalid @enderror" name="email" placeholder="E-Mail"
                                value="{{old('email') ?? $guidescruple->email}}">

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
                                <input type="number" class="form-control @error('phone') ?? is-invalid @enderror" name="phone" placeholder="Nomor Telepon"
                                value="{{old('phone') ?? $guidescruple->phone}}">

                                @error('phone')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="job">Pekerjaan</label>
                                <input type="text" class="form-control @error('job') ?? is-invalid @enderror" name="job" placeholder="Pekerjaan"
                                value="{{old('job') ?? $guidescruple->job}}">

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

                        <textarea class="form-control @error('applicantdata') is-invalid @enderror" name="applicantdata" placeholder="Deskripsi Rincian Informasi">{{old('applicantdata', $guidescruple->applicantdata ?? '')}}</textarea>

                        @error('applicantdata')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="objective">Tujuan Penggunaan Informasi</label>

                        <textarea class="form-control @error('objective') is-invalid @enderror" name="objective" placeholder="Deskripsi Tujuan Penggunaan Informasi">{{old('objective', $guidescruple->objective ?? '')}}</textarea>

                        @error('objective')
                        <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="obtaion">Cara Memperoleh Informasi</label>
                        <br>
                        <input type="radio" name="obtaion" value="1" {{ $guidescruple->obtaion == '1' ? 'checked' : '' }}> Melihat
                        <input type="radio" name="obtaion" value="2" {{ $guidescruple->obtaion == '2' ? 'checked' : '' }}> Membaca
                        <input type="radio" name="obtaion" value="3" {{ $guidescruple->obtaion == '3' ? 'checked' : '' }}> Mendengarkan
                        <input type="radio" name="obtaion" value="4" {{ $guidescruple->obtaion == '4' ? 'checked' : '' }}> Mencatat

                    </div>


                    <div class="form-group">
                        <label for="copy">Mendapatkan Salinan Informasi</label>
                        <br>
                        <input type="radio" name="copy" value="1"  {{ $guidescruple->copy == '1' ? 'checked' : '' }}>Softcopy
                        <input type="radio" name="copy" value="2"  {{ $guidescruple->copy == '2' ? 'checked' : '' }}>Hardcopy

                    </div>

                    <div class="form-group">
                        <label for="obation">Cara Mendapatkan Salinan Informasi</label>
                        <br>
                        <input type="radio" name="method" value="1"  {{ $guidescruple->method == '1' ? 'checked' : '' }}>Mengambil Langsung
                        <input type="radio" name="method" value="2"  {{ $guidescruple->method == '2' ? 'checked' : '' }}>Faksimili
                        <input type="radio" name="method" value="3"  {{ $guidescruple->method == '3' ? 'checked' : '' }}>Email

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
