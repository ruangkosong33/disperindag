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
                        <form action="{{ route('permohonan.keberatan.informasi.request.ppid') }}" method="POST"
                            class="contact-form ajax-contact">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="name" id="name"
                                            placeholder="Nama Lengkap Anda*">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="" id=""
                                            class="single-select nice-select form-select style-white">
                                            <option value="">Pilih Kategori Permohonan</option>
                                        </select>
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="address" id="address"
                                            placeholder="Alamat Lengkap">
                                        <i class="fal fa-map"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-white" name="email" id="email"
                                            placeholder="Email*">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control style-white" name="telepon" id="telepon"
                                            placeholder="Nomor Telepon*">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="pekerjaan"
                                            id="number" placeholder="Pekerjaan">
                                        <i class="fal fa-user-doctor"></i>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group ">
                                        <textarea name="dataPemohon" id="message" cols="30" rows="3" class="form-control style-white"
                                            placeholder="Data Pemohon*"></textarea>
                                        <i class="fal fa-user-plus"></i>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group ">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control style-white"
                                            placeholder="Tujuan Penggunaan Informasi*"></textarea>
                                        <i class="fal fa-pen"></i>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group ">
                                        <h5>Cara Memperoleh Informasi</h5>
                                        <div>
                                            <input type="radio" class="input-radio" id="melihat"
                                                name="caraMemperolehInformasi" value="Melihat">
                                            <label for="melihat">Melihat</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="input-radio" id="membaca"
                                                name="caraMemperolehInformasi" value="Membaca">
                                            <label for="membaca">Membaca</label>
                                        </div>
                                        <div>
                                            <input type="radio" class="input-radio" id="mendengarkan"
                                                name="caraMemperolehInformasi" value="Mendengarkan">
                                            <label for="mendengarkan">Mendengarkan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group ">
                                        <h5>Mendapatkan Salinan Informasi</h5>
                                        <div>
                                            <input type="radio" id="softcopy" name="salinan_informasi"
                                                value="Softcopy">
                                            <label for="softcopy">Softcopy</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="hardcopy" name="salinan_informasi"
                                                value="Hardcopy">
                                            <label for="hardcopy">Hardcopy</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>Cara Mendapatkan Salinan Informasi</h5>
                                        <div>
                                            <input type="radio"id="langsung" name="caraSalinanInformasi"
                                                value="Mengambil Langsung">
                                            <label for="langsung">Mengambil Langsung</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="faksimili" name="caraSalinanInformasi"
                                                value="Faksimili">
                                            <label for="faksimili">Faksimili</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="emailRadio" name="caraSalinanInformasi"
                                                value="Email">
                                            <label for="emailRadio">Email</label>
                                        </div>
                                    </div>
                                </div>
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
