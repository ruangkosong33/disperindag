@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Permohonan Keberatan Informasi'])
@endsection

@section('content')
    <div class="space" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png">
                        <span class="sub-title">Permohonan Informasi</span>
                        <h2 class="border-title">Get in Touch</h2>
                        <p class="mt-n1 mb-30 sec-text">Silakan isi data-data di bawah ini.</p>
                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form action="{{ route('permohonan.keberatan.informasi.request.ppid') }}" method="post"
                            class="contact-form">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control style-white @error('name') is-invalid @enderror"
                                            name="name" id="name" value="{{ old('name') }}"
                                            placeholder="Nama Lengkap Anda*">
                                        <i class="fal fa-user"></i>
                                        @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="category" id=""
                                            class="single-select nice-select form-select style-white @error('category') is-invalid @enderror">
                                            <option value="">Pilih Kategori Permohonan</option>
                                            @foreach ($categories as $key => $value)
                                                <option value="{{ $value }}">{{ $key }}</option>
                                            @endforeach
                                        </select>
                                        <i class="fal fa-user"></i>
                                        @error('category')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control style-white @error('address') is-invalid @enderror"
                                            name="address" id="address" placeholder="Alamat Lengkap"
                                            value="{{ old('address') }}">
                                        <i class="fal fa-map"></i>
                                        @error('address')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email"
                                            class="form-control style-white  @error('email') is-invalid @enderror"
                                            name="email" id="email" placeholder="Email*" value="{{ old('email') }}"
                                            required>
                                        <i class="fal fa-envelope"></i>
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel"
                                            class="form-control style-white @error('telepon') is-invalid @enderror"
                                            name="telepon" id="telepon" placeholder="Nomor Telepon*"
                                            value="{{ old('telepon') }}">
                                        <i class="fal fa-phone"></i>
                                        @error('telepon')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control style-white @error('pekerjaan') is-invalid @enderror"
                                            name="pekerjaan" id="number" placeholder="Pekerjaan"
                                            value="{{ old('pekerjaan') }}">
                                        <i class="fal fa-user-doctor"></i>
                                        @error('pekerjaan')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group ">
                                        <textarea name="dataPemohon" id="message" cols="30" rows="3"
                                            class="form-control style-white @error('dataPemohon') is-invalid @enderror" placeholder="Data Pemohon*">{{ old('dataPemohon') }}</textarea>
                                        <i class="fal fa-user-plus"></i>
                                        @error('dataPemohon')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group ">
                                        <textarea name="tujuan" id="message" cols="30" rows="3"
                                            class="form-control style-white @error('tujuan') is-invalid @enderror" placeholder="Tujuan Penggunaan Informasi*">{{ old('tujuan') }}</textarea>
                                        <i class="fal fa-pen"></i>
                                        @error('tujuan')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group ">
                                        <h5>Cara Memperoleh Informasi</h5>
                                        <div>
                                            <input type="radio" class="input-radio" id="melihat"
                                                name="caraMemperolehInformasi" value="1">
                                            <label for="melihat">Melihat</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="input-radio" id="membaca"
                                                name="caraMemperolehInformasi" value="2">
                                            <label for="membaca">Membaca</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="input-radio" id="mendengarkan"
                                                name="caraMemperolehInformasi" value="3">
                                            <label for="mendengarkan">Mendengarkan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group ">
                                        <h5>Mendapatkan Salinan Informasi</h5>
                                        <div>
                                            <input type="radio" id="softcopy" name="salinan_informasi"
                                                value="1">
                                            <label for="softcopy">Softcopy</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="hardcopy" name="salinan_informasi"
                                                value="2">
                                            <label for="hardcopy">Hardcopy</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Cara Mendapatkan Salinan Informasi</h5>
                                        <div>
                                            <input type="radio"id="langsung" name="caraSalinanInformasi"
                                                value="1">
                                            <label for="langsung">Mengambil Langsung</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="faksimili" name="caraSalinanInformasi"
                                                value="2">
                                            <label for="faksimili">Faksimili</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="emailRadio" name="caraSalinanInformasi"
                                                value="3">
                                            <label for="emailRadio">Email</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- {!! RecaptchaV3::field(route('permohonan.keberatan.informasi.request.ppid')) !!} --}}
                                {!! app('captcha')->display() !!}
                                <div class="form-btn col-12 mt-10">
                                    <button onclick="submit()" class="th-btn">Submit<i
                                            class="fas fa-long-arrow-right ms-2"></i></button>
                                </div>

                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
