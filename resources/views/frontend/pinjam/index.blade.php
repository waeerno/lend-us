<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	@include('frontend.layouts.head')
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{asset('media/svg/illustrations/landing.svg')}})">
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Plans-->
                            <div class="d-flex flex-column container pt-lg-20">
                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <h1 class="fs-2hx fw-bolder text-white mb-5" id="pricing" data-kt-scroll-offset="{default: 100, lg: 150}">Lakukan Peminjaman Dengan Mudah</h1>
                                    <div class="text-gray-600 fw-bold fs-5">Peminjaman akan di konfimasi oleh admin terkait ketersediaan dan jadwal peminjaman, <br>
                                    silahkan lengkapi data untuk melanjutkan peminjaman</div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Card body-->
                                <div class="card-body p-lg-20">
                                    <!--begin::Heading-->
                                    <div class="text-center ">
                                        <!--begin::Title-->
                                        <h3 class="text-white"data-kt-scroll-offset="{default: 100, lg: 150}">Jenis Peminjaman</h3>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Heading-->
                                    <div class="text-center" id="kt_pricing">
                                        <div class="nav landing-dark-bg d-inline-flex mb-15" data-kt-buttons="true" style="border: 1px dashed #2B4666;">
                                            <a class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3 me-2 active" href="#" data-bs-toggle="tab" data-bs-target="#premium_zoom">Zoom Premium</a>
                                            <a class="btn btn-color-gray-600 btn-active btn-active-success px-6 py-3" href="#" data-bs-toggle="tab" data-bs-target="#lab">Ruang Lab</a>
                                        </div>
                                    </div>


                                    <!--begin::form -->

                                    <div class="tab-content">
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane fade show active" id="premium_zoom">
                                            <!--begin::Container-->
                                            <div id="kt_content_container" class="container">
                                                <!--begin::Stepper-->
                                                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper">
                                                    <!--begin::Aside-->
                                                    <div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px me-9">
                                                        <!--begin::Wrapper-->
                                                        <div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
                                                            <!--begin::Nav-->
                                                            <div class="stepper-nav">
                                                                <!--begin::Step 1-->
                                                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                                                    <!--begin::Line-->
                                                                    <div class="stepper-line w-40px"></div>
                                                                    <!--end::Line-->
                                                                    <!--begin::Icon-->
                                                                    <div class="stepper-icon w-40px h-40px">
                                                                        <i class="stepper-check fas fa-check"></i>
                                                                        <span class="stepper-number">1</span>
                                                                    </div>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Label-->
                                                                    <div class="stepper-label">
                                                                        <h3 class="stepper-title">Jenis Pengguna</h3>
                                                                        <div class="stepper-desc fw-bold">Siapa yang akan menggunakan</div>
                                                                    </div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Step 1-->
                                                                <!--begin::Step 2-->
                                                                <div class="stepper-item" data-kt-stepper-element="nav">
                                                                    <!--begin::Line-->
                                                                    <div class="stepper-line w-40px"></div>
                                                                    <!--end::Line-->
                                                                    <!--begin::Icon-->
                                                                    <div class="stepper-icon w-40px h-40px">
                                                                        <i class="stepper-check fas fa-check"></i>
                                                                        <span class="stepper-number">2</span>
                                                                    </div>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Label-->
                                                                    <div class="stepper-label">
                                                                        <h3 class="stepper-title">Identitas peminjam</h3>
                                                                        <div class="stepper-desc fw-bold">Biodata lengkap</div>
                                                                    </div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Step 2-->
                                                                <!--begin::Step 3-->
                                                                <div class="stepper-item" data-kt-stepper-element="nav">
                                                                    <!--begin::Line-->
                                                                    <div class="stepper-line w-40px"></div>
                                                                    <!--end::Line-->
                                                                    <!--begin::Icon-->
                                                                    <div class="stepper-icon w-40px h-40px">
                                                                        <i class="stepper-check fas fa-check"></i>
                                                                        <span class="stepper-number">3</span>
                                                                    </div>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Label-->
                                                                    <div class="stepper-label">
                                                                        <h3 class="stepper-title">Agenda</h3>
                                                                        <div class="stepper-desc fw-bold">Detail Acara</div>
                                                                    </div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Step 3-->
                                                                <!--begin::Step 4-->
                                                                <div class="stepper-item" data-kt-stepper-element="nav">
                                                                    <!--begin::Line-->
                                                                    <div class="stepper-line w-40px"></div>
                                                                    <!--end::Line-->
                                                                    <!--begin::Icon-->
                                                                    <div class="stepper-icon w-40px h-40px">
                                                                        <i class="stepper-check fas fa-check"></i>
                                                                        <span class="stepper-number">4</span>
                                                                    </div>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Label-->
                                                                    <div class="stepper-label">
                                                                        <h3 class="stepper-title">Berkas</h3>
                                                                        <div class="stepper-desc fw-bold">Surat permohonan</div>
                                                                    </div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Step 4-->
                                                                <!--begin::Step 5-->
                                                                <div class="stepper-item" data-kt-stepper-element="nav">
                                                                    <!--begin::Line-->
                                                                    <div class="stepper-line w-40px"></div>
                                                                    <!--end::Line-->
                                                                    <!--begin::Icon-->
                                                                    <div class="stepper-icon w-40px h-40px">
                                                                        <i class="stepper-check fas fa-check"></i>
                                                                        <span class="stepper-number">5</span>
                                                                    </div>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Label-->
                                                                    <div class="stepper-label">
                                                                        <h3 class="stepper-title">Selesai</h3>
                                                                        <div class="stepper-desc fw-bold">Woah, we are here</div>
                                                                    </div>
                                                                    <!--end::Label-->
                                                                </div>
                                                                <!--end::Step 5-->
                                                            </div>
                                                            <!--end::Nav-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--begin::Aside-->
                                                    <!--begin::Content-->
                                                    <div class="card d-flex flex-row-fluid flex-center">
                                                        <!--begin::Form-->
                                                        <form class="card-body py-20 w-100 w-xl-600px px-9" novalidate="novalidate" id="kt_create_account_form" method="POST" action="{{route('pinjam.update', [$data->kode_pinjam])}}">
                                                            @csrf
                                                            <!--begin::Step 1-->
                                                            <div class="current" data-kt-stepper-element="content">
                                                                <!--begin::Wrapper-->
                                                                <div class="w-90">
                                                                    <!--begin::Heading-->
                                                                    <div class="pb-10 pb-lg-15">
                                                                        <!--begin::Title-->
                                                                        <h2 class="fw-bolder d-flex align-items-center text-dark">Jenis Pengguna
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
                                                                        <!--end::Title-->
                                                                        <!--begin::Notice-->
                                                                        <div class="text-muted fw-bold fs-6">Jika memiliki pertanyaan silahkan kunjungi
                                                                        <a href="" class="link-primary fw-bolder">halaman awal</a>.</div>
                                                                        <!--end::Notice-->
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row">
                                                                        <!--begin::Row-->
                                                                        <div class="row">
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-6">
                                                                                <!--begin::Option-->
                                                                                <input type="hidden" name="jenis_pinjam" value="zoom">
                                                                                <input type="radio" class="btn-check" name="jenis_pengguna" value="mahasiswa" id="kt_create_account_form_account_type_personal" />
                                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                                                                    <span class="svg-icon svg-icon-3x me-5">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                            <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="black" />
                                                                                            <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                    <!--begin::Info-->
                                                                                    <span class="d-block fw-bold text-start">
                                                                                        <span class="text-dark fw-bolder d-block fs-4 mb-2"> Mahasiswa</span>
                                                                                        <span class="text-muted fw-bold fs-6">Penggunaan untuk kegiatan mahasiswa</span>
                                                                                    </span>
                                                                                    <!--end::Info-->
                                                                                </label>
                                                                                <!--end::Option-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                            <!--begin::Col-->
                                                                            <div class="col-lg-6">
                                                                                <!--begin::Option-->
                                                                                <input type="radio" class="btn-check" name="jenis_pengguna" value="pegawai" id="kt_create_account_form_account_type_corporate" />
                                                                                <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center" for="kt_create_account_form_account_type_corporate">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                                                    <span class="svg-icon svg-icon-3x me-5">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                            <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
                                                                                            <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                    <!--begin::Info-->
                                                                                    <span class="d-block fw-bold text-start">
                                                                                        <span class="text-dark fw-bolder d-block fs-4 mb-2">Pegawai</span>
                                                                                        <span class="text-muted fw-bold fs-6">Kegiatan Unit/fakultas</span>
                                                                                    </span>
                                                                                    <!--end::Info-->
                                                                                </label>
                                                                                <!--end::Option-->
                                                                            </div>
                                                                            <!--end::Col-->
                                                                        </div>
                                                                        <!--end::Row-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Step 1-->
                                                            <!--begin::Step 2-->
                                                            <div data-kt-stepper-element="content">
                                                                <!--begin::Wrapper-->
                                                                <div class="w-100">
                                                                    <!--begin::Heading-->
                                                                    <div class="pb-10 pb-lg-15">
                                                                        <!--begin::Title-->
                                                                        <h2 class="fw-bolder text-dark">Identitas peminjam</h2>
                                                                        <!--end::Title-->
                                                                        <!--begin::Notice-->
                                                                        <div class="text-muted fw-bold fs-6">Data pengguna di perlukan untuk proses cerifikasi lanjut
                                                                        </div>
                                                                        <!--end::Notice-->
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label mb-3">Nama Lengkap</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input type="text" class="form-control form-control-lg form-control-solid" name="nama"/>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label mb-3">NIM/NIK/NIP</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input type="text" class="form-control form-control-lg form-control-solid" name="nomor_induk"/>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label mb-3">No HP</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input type="text" class="form-control form-control-lg form-control-solid" name="hp"/>
                                                                        <!--end::Input-->
                                                                        <!--begin::Hint-->
                                                                        <div class="form-text">No HP adalah nomor whatsapp aktif yang dapat dihubungi untuk keperluan konfirmasi</div>
                                                                        <!--end::Hint-->
                                                                    </div>
                                                                    <!--end::Input group-->

                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label mb-3">E-Mail</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input type="email" class="form-control form-control-lg form-control-solid" name="email"/>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Step 2-->
                                                            <!--begin::Step 3-->
                                                            <div data-kt-stepper-element="content">
                                                                <!--begin::Wrapper-->
                                                                <div class="w-100">
                                                                    <!--begin::Heading-->
                                                                    <div class="pb-10 pb-lg-12">
                                                                        <!--begin::Title-->
                                                                        <h2 class="fw-bolder text-dark">Agenda</h2>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label required">Nomor Surat</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input name="nomor" class="form-control form-control-lg form-control-solid" type="teks"/>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="d-flex align-items-center form-label">Tanggal Surat
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <input name="tanggal_surat" class="form-control form-control-lg form-control-solid" type="date"/>
                                                                        <!--end::Input-->
                                                                        <!--begin::Hint-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="fv-row mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label required">Nama Kegiatan</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <textarea name="nama_kegiatan" class="form-control form-control-lg form-control-solid" rows="3"></textarea>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Step 3-->
                                                            <!--begin::Step 4-->
                                                            <div data-kt-stepper-element="content">
                                                                <!--begin::Wrapper-->
                                                                <div class="w-100">
                                                                    <!--begin::Heading-->
                                                                    <div class="pb-10 pb-lg-15">
                                                                        <!--begin::Title-->
                                                                        <h2 class="fw-bolder text-dark">Surat Permohonan</h2>
                                                                        <!--end::Title-->
                                                                        <!--begin::Notice-->
                                                                        <div class="text-muted fw-bold fs-6">Unggah surat Permohonan</a>.</div>
                                                                        <!--end::Notice-->
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Input group-->
                                                                    <div class="d-flex flex-column mb-7 fv-row">
                                                                        <!--begin::Label-->
                                                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                                            <span class="required">Scan Surat Peminjaman</span>
                                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"></i>
                                                                        </label>
                                                                        <!--end::Label-->
                                                                        <input name="file" type="file" class="form-control">
                                                                        <div class="fs-7 fw-bold text-muted">File harus berformat .PDF dengan maksimal size 1MB</div>
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Step 4-->
                                                            <!--begin::Step 5-->
                                                            <div data-kt-stepper-element="content">
                                                                <!--begin::Wrapper-->
                                                                <div class="w-100">
                                                                    <!--begin::Heading-->
                                                                    <div class="pb-8 pb-lg-10">
                                                                        <!--begin::Title-->
                                                                        <h2 class="fw-bolder text-dark">Selesai!</h2>
                                                                        <!--end::Title-->
                                                                        <!--begin::Notice-->
                                                                        <div class="text-muted fw-bold fs-6">Selamat, Proses peminjamana selesai</div>
                                                                        <!--end::Notice-->
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Body-->
                                                                    <div class="mb-0">
                                                                        <!--begin::Text-->
                                                                        <div class="fs-6 text-gray-600 mb-5">Terimakasih telah melakukan peminjam fasilitas Zoom premium menggunakan aplikasi Lend-US. Simpan Kode berikut untuk menelusuri proses peminjaman</div>
                                                                        <!--end::Text-->
                                                                        <!--begin::Alert-->
                                                                        <!--begin::Notice-->
                                                                        <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                                                            <!--begin::Icon-->
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                                                                    <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
                                                                                    <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                            <!--end::Icon-->
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex flex-stack flex-grow-1">
                                                                                <!--begin::Content-->
                                                                                <div class="fw-bold">
                                                                                    <h4 class="text-gray-900 fw-bolder">Kode peminjaman anda adalah <strong class="text-danger">12344</strong></h4>
                                                                                    <div class="fs-6 text-gray-700">Simpan kode berikut untuk melihat status peminjaman pada halaman
                                                                                    <a href="{{route('periksa.index')}}" class="fw-bolder">Periksa peminjaman</a></div>
                                                                                </div>
                                                                                <!--end::Content-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                        </div>
                                                                        <!--end::Notice-->
                                                                        <!--end::Alert-->
                                                                    </div>
                                                                    <!--end::Body-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Step 5-->
                                                            <!--begin::Actions-->
                                                            <div class="d-flex flex-stack pt-10">
                                                                <!--begin::Wrapper-->
                                                                <div class="mr-2">
                                                                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">Back</button>
                                                                </div>
                                                                <!--end::Wrapper-->
                                                                <!--begin::Wrapper-->
                                                                <div>
                                                                    <button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                                                                        <span class="indicator-label">Submit</span>
                                                                        <span class="indicator-progress">Please wait...
                                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                                    </button>
                                                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                                                    </button>
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Stepper-->
                                            </div>
                                            <!--end::Container-->
                                        </div>
                                        <!--end::Tab pane-->
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane fade" id="lab">
                                            <!--begin::Row-->
                                            <div class="card shadow-sm">
                                                <div class="card-header">
                                                    <h3 class="card-title">Title</h3>
                                                    <div class="card-toolbar">
                                                        <button type="button" class="btn btn-sm btn-light">
                                                            Action
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, minus eligendi. Ducimus, possimus. Aut porro fugit sapiente, harum, neque fugiat consequatur sunt deleniti corporis accusantium qui. Quibusdam sit repellat quos.
                                                </div>
                                                <div class="card-footer">
                                                    Footer
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Tab pane-->
                                    </div>

                                    <!--end::form -->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Plans-->
                        </div>
                        <!--end::Container-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Header Section-->

			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
	    @include('frontend.layouts.script')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
