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
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Wrapper-->,,
							<div class="d-flex align-items-center justify-content-between">
								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">
									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="">
										{{-- <img alt="Logo" src="{{asset('media/logos/logo-putih.png')}}" class="logo-default h-25 h-lg-60px" />
										<img alt="Logo" src="{{asset('media/logos/logo-hitam.png')}}" class="logo-sticky h-25 h-lg-60px" /> --}}
									</a>
									<!--end::Logo image-->
								</div>
								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">
									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										@include('frontend.layouts.nav')
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
								<div class="flex-equal text-end ms-1">
									<a href="{{route('login')}}" class="btn btn-success">Login</a>
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
						<!--begin::Heading-->
						<div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
							<!--begin::Title-->
							<h1 class="text-white lh-base fw-bolder fs-2x fs-lg-3x mb-15">Solusi Peminjaman Terbaik
							<br />Dengan
							<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
								<span id="kt_landing_hero_text">Aplikasi Lend US</span>
							</span></h1>
							<!--end::Title-->
							<!--begin::Action-->
							<a href="{{route('pinjam.index')}}" class="btn btn-primary">Coba Peminjaman</a>
							<a href="{{route('periksa.index')}}" class="btn btn-success">Periksa Peminjaman</a>
							<!--end::Action-->
						</div>
						<!--end::Heading-->
						<!--begin::Clients-->
						<div class="d-flex flex-center flex-wrap position-relative px-5">
							<!--begin::Client-->
                            <?php for ($i=0; $i < 5 ; $i++) { ?>

							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="PTIPD">
								<img src="{{asset('media/svg/brand-logos/ptipd.png')}}" class="mh-60px mh-lg-80px" alt="" />
							</div>
							<!--end::Client-->

                            <!--begin::Client-->
							<div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="UIN">
								<img src="{{asset('media/svg/brand-logos/uin.png')}}" class="mh-60px mh-lg-80px" alt="" />
							</div>

                            <?php } ?>
							<!--end::Client-->
						</div>
						<!--end::Clients-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<!--begin::How It Works Section-->
			<div class="mb-n10 mb-lg-n20 z-index-2">
				<!--begin::Container-->
				<div class="container">
					<!--begin::Heading-->
					<div class="text-center mb-17">
						<!--begin::Title-->
						<h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Bagaimana Caranya?</h3>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="fs-5 text-muted fw-bold">Simpan waktumu yang berharga, dan lakukan reservasi dari sini.
						<br />kami akan menyiapkannya dengan sentuhan ajaib</div>
						<!--end::Text-->
					</div>
					<!--end::Heading-->
					<!--begin::Row-->
					<div class="row w-100 gy-10 mb-md-20">
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{asset('media/illustrations/sketchy-1/2.png')}}" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">1</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Registrasi</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-bold fs-6 fs-lg-4 text-muted">Siapa yang memesan? <br> Siapkan data diri dan identitas anda </div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{asset('media/illustrations/sketchy-1/8.png')}}" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">2</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Reservasi</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-bold fs-6 fs-lg-4 text-muted">Masukkan jenis dan data pemesanan</div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-4 px-5">
							<!--begin::Story-->
							<div class="text-center mb-10 mb-md-0">
								<!--begin::Illustration-->
								<img src="{{asset('media/illustrations/sketchy-1/12.png')}}" class="mh-125px mb-9" alt="" />
								<!--end::Illustration-->
								<!--begin::Heading-->
								<div class="d-flex flex-center mb-5">
									<!--begin::Badge-->
									<span class="badge badge-circle badge-light-success fw-bolder p-5 me-3 fs-3">3</span>
									<!--end::Badge-->
									<!--begin::Title-->
									<div class="fs-5 fs-lg-3 fw-bolder text-dark">Enjoy Your Time</div>
									<!--end::Title-->
								</div>
								<!--end::Heading-->
								<!--begin::Description-->
								<div class="fw-bold fs-6 fs-lg-4 text-muted">Simpan KODE pemesananmu <br> untuk melihat ketersediaan</div>
								<!--end::Description-->
							</div>
							<!--end::Story-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Product slider-->
					<div class="tns tns-default">
						<!--begin::Slider-->
						<div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">
							<!--begin::Item-->
							<div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="{{asset('media/product-demos/demo1.png')}}" class="card-rounded shadow mw-100" alt="" />
							</div>

                            <div class="text-center px-5 pt-5 pt-lg-10 px-lg-10">
								<img src="{{asset('media/product-demos/demo1.png')}}" class="card-rounded shadow mw-100" alt="" />
							</div>
							<!--end::Item-->
						</div>
						<!--end::Slider-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
						<!--begin::Slider button-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
							<span class="svg-icon svg-icon-3x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Slider button-->
					</div>
					<!--end::Product slider-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::How It Works Section-->
			<!--begin::Statistics Section-->
			<div class="mt-sm-n10">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="pb-15 pt-18 landing-dark-bg">
					<!--begin::Container-->
					<div class="container">
						<!--begin::Heading-->
						<div class="text-center mt-15 mb-18" id="achievements" data-kt-scroll-offset="{default: 100, lg: 150}">
							<!--begin::Title-->
							<h3 class="fs-2hx text-white fw-bolder mb-5">Buat segalanya jadi mudah</h3>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="fs-5 text-gray-700 fw-bold">Kami mencacat data peminjaman sebelumnya
							<br />berikut ini adalah data yang kami punya</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Statistics-->
						<div class="d-flex flex-center">
							<!--begin::Items-->
							<div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
								<!--begin::Item-->
								<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
									<!--begin::Symbol-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
									<span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
											<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
											<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
											<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="mb-0">
										<!--begin::Value-->
										<div class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center">
											<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700" data-kt-countup-suffix="+">0</div>
										</div>
										<!--end::Value-->
										<!--begin::Label-->
										<span class="text-gray-600 fw-bold fs-5 lh-0">Pemesanan</span>
										<!--end::Label-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
									<!--begin::Symbol-->
									<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
									<span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
											<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
											<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="mb-0">
										<!--begin::Value-->
										<div class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center">
											<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="35" data-kt-countup-suffix="M+">0</div>
										</div>
										<!--end::Value-->
										<!--begin::Label-->
										<span class="text-gray-600 fw-bold fs-5 lh-0">Penggunaan</span>
										<!--end::Label-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
                                <!--begin::Item-->
								<div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
									<!--begin::Symbol-->
									<!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
									<span class="svg-icon svg-icon-2tx svg-icon-white mb-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z" fill="black" />
											<path opacity="0.3" d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z" fill="black" />
											<path opacity="0.3" d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Symbol-->
									<!--begin::Info-->
									<div class="mb-0">
										<!--begin::Value-->
										<div class="fs-lg-2hx fs-2x fw-bolder text-white d-flex flex-center">
											<div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="80" data-kt-countup-suffix="K+">0</div>
										</div>
										<!--end::Value-->
										<!--begin::Label-->
										<span class="text-gray-600 fw-bold fs-5 lh-0">Statistic Reports</span>
										<!--end::Label-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
						</div>
						<!--end::Statistics-->
						<!--begin::Testimonial-->
						<div class="fs-2 fw-bold text-muted text-center mb-3">
						<span class="fs-1 lh-1 text-gray-700">“</span>Peluangmu untuk sukses dalam usaha apa pun selalu dapat diukur dengan keyakinanmu pada diri sendiri
						<span class="fs-1 lh-1 text-gray-700">“</span></div>
						<!--end::Testimonial-->
						<!--begin::Author-->
						<div class="fs-2 fw-bold text-muted text-center">
							<span class="fs-4 fw-bolder text-gray-600">- Robert Collier</span>
						</div>
						<!--end::Author-->
					</div>
					<!--end::Container-->
                    <!--begin::Container-->
					<div class="container">
						<!--begin::Row-->
						<div class="d-flex text-center row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-12 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white">punya pertanyaan lebih lanjut?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700">Hubungi kami di pelayanan C3
									<a href="https://wa.me/628117627773" class="text-white opacity-50 text-hover-primary">0811-762-7773</a> <u>Hanya whatsapp pada jam kerja</u></span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Statistics Section-->
			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-20">

					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="">
									<img alt="Logo" src="{{asset('media/logos/logo-putih.png')}}" class="h-30px h-md-40px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="#">© 2022 PTIPD.</span>
								<!--end::Logo image-->
							</div>
							<!--end::Copyright-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
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
