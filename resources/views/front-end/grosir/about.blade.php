@extends('front-end/grosir/layouts/main')

@section('container')
@include('front-end/grosir/layouts/component/Preloader')
@include('front-end/grosir/layouts/component/header')
@include('front-end/grosir/layouts/component/searching')



	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">

						<h1>About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">Kenapa <span class="orange-text">Velaris</span></h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-shipping-fast"></i>
									</div>
									<div class="content">
										<h3>Pengiriman Ke Rumah</h3>
										<p>Pengiriman ke rumah yang efisien dan andal adalah kunci untuk memberikan pengalaman belanja yang memuaskan bagi pelanggan.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-money-bill-alt"></i>
									</div>
									<div class="content">
										<h3>Harga Terbaik</h3>
										<p>Temukan nilai terbaik untuk setiap pembelian Anda dengan komitmen kami terhadap harga terbaik. Kami memahami bahwa mendapatkan produk berkualitas dengan harga yang terjangkau adalah hal yang sangat penting bagi Anda.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-briefcase"></i>
									</div>
									<div class="content">
										<h3>Custom Box</h3>
										<p>Kami bangga mempersembahkan layanan kotak kustom yang dirancang untuk memenuhi kebutuhan dan keinginan spesifik Anda. Dengan kotak kustom, produk Anda tidak hanya terlindungi dengan sempurna tetapi juga tampil lebih menarik dan eksklusif.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-sync-alt"></i>
									</div>
									<div class="content">
										<h3>Pengembalian Dana Cepat</h3>
										<p>Kami memahami bahwa kenyamanan dan kepuasan Anda adalah prioritas utama. Oleh karena itu, kami menghadirkan layanan pengembalian dana cepat yang dirancang untuk memberikan pengalaman berbelanja yang bebas dari kekhawatiran.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end featured section -->

	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3 id="obral">Obral bulan Ini <br> Dengan Discount <span class="orange-text">Besar...</span></h3>
            <div class="sale-percent"><span>Obral! <br> Sampe</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Belanja Sekarang</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- team section -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Team <span class="orange-text">Kita</span></h3>
						<p>Kerja kelompok kami dirancang untuk memaksimalkan potensi setiap anggota tim dan mencapai hasil yang luar biasa melalui kolaborasi yang efektif dan suasana kerja yang positif.</p>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-1"></div>
                        <h4>Agits Syuhada Firdaus <span>" NIM : 231351007 "</span></h4>
                        <ul class="social-link-team">
                            <li><a href="https://facebook.com/agits.syuhada.firdaus.701" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://x.com/chrysantemumi" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/agtssna21/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-2"></div>
                        <h4>Danny Krisna Permana<span>" NIM : 231351039 "</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-3"></div>
                        <h4>Naomi Sitanggang <span>" NIM : 231351179 "</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="single-team-item">
                        <div class="team-bg team-bg-4"></div>
                        <h4> Widi Andrian <span>"NIM : 181351215 "</span></h4>
                        <ul class="social-link-team">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!-- end team section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-80 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3> Rheina Fairuz <span>Costumer</span></h3>
								<p class="testimonial-body">
									"Toko grosir terbaik! Harganya sangat terjangkau dan produk-produk yang ditawarkan berkualitas tinggi. Sangat recommended!"
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3> Yana <span>Costumer</span></h3>
								<p class="testimonial-body">
									"Sangat puas dengan pelayanan di sini! Stafnya ramah dan responsif, semua kebutuhan saya terpenuhi dengan cepat. Pasti akan kembali lagi!"
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3> taufik <span>Costumer</span></h3>
								<p class="testimonial-body">
									"Banyak diskon dan promosi menarik di toko ini. Selalu ada penawaran spesial yang menguntungkan pelanggan. Sangat hemat!"
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

@include('front-end/grosir/layouts/component/footer')

@include('front-end/grosir/layouts/component/copyright')

@endsection


