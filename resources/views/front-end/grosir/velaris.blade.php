@extends('front-end/grosir/layouts/main')

@section('container')
@include('front-end/grosir/layouts/component/Preloader')
@include('front-end/grosir/layouts/component/header')
@include('front-end/grosir/layouts/component/searching')

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle"> Where Quality Meets Affordability </p>
							<h1>Velaris</h1>
							<div class="hero-btns">
								<a href="{{ route('shop') }}" class="boxed-btn"> Belanja Sekarang </a>
								<a href="{{ route('contact') }}" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Gratis Pengiriman</h3>
							<p>Dimana Order Lebih dari RP 30.000</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24 jam Support</h3>
							<p>Mendapat Support Tiap Hari</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Pengembalian</h3>
							<p>Dapatkan pengembalian dana dalam 3 hari</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Produk</span> Kami</h3>
						<p>Selamat datang di Toko Grosir Dirgahayu, mitra terpercaya untuk semua kebutuhan grosir Anda! Kami hadir dengan berbagai produk berkualitas tinggi dan harga yang sangat kompetitif, menjadikan kami pilihan utama bagi para pedagang, pengusaha, dan komunitas lokal.</p>
					</div>
				</div>
			</div>

			<div class="row">
                @foreach ( $produkkami as $item )


				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('storage/' . $item->image) }}" alt=""></a>
						</div>
						<h3> {{ $item->jenis_barang }} </h3>
						<p class="product-price"><span>{{ $item->deskripsi }}</span>Mulai Dari Rp {{ $item->price }} </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Ke Keranjang</a>
					</div>
				</div>
                @endforeach

			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
                {{-- @foreach ( $discount as $item ) --}}
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>{{ $discount->discount }}</strong> <br> off
                                </span>
                            </div>
                        </div>
                    	<img src="{{ asset('storage/' . $discount->image) }}" alt="">
                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text"> {{ $discount->date }}</h3>
                    <h4>{{ $discount->name }}</h4>
                    <div class="text">{{ $discount->deskripsi }}</div>
                    <!--Countdown Timer-->
                    <p><span style=" font-family: 'Poppins', sans-serif;font-size: 30px;font-weight: 700;margin-bottom: 15px;"> Rp {{ $discount->old_price }}  JADI Rp {{ $discount->new_price }} </span></p>
                {{-- @endforeach --}}
                	<a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Masukan Ke Keranjang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Agits Syuhada Firdaus <span>Costumer</span></h3>
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
								<h3>Danny <span>Costumer</span></h3>
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
								<h3>Rheina Fairuz <span>Costumer</span></h3>
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

	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/embed?v=gdsCPzgDka8" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Sejak Tahun 2003</p>
						<h2>Kita <span class="orange-text">Velaris</span></h2>
						<p>tujuan utama Anda untuk semua kebutuhan grosir dengan kualitas terbaik dan harga yang bersaing. Kami menawarkan berbagai produk berkualitas, mulai dari bahan makanan pokok hingga keperluan rumah tangga, semua dengan pelayanan yang ramah dan efisien</p>

						<a href="{{ route('about') }}" class="boxed-btn mt-4">Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3 id="obral">Obral bulan Ini <br> Dengan Discount <span class="orange-text">Besar...</span></h3>
            <div class="sale-percent"><span>Obral! <br> Sampe</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Belanja Sekarang</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Produk </span>Terbaru Dari Kami</h3>
						<p> Kesimpulan ini menyoroti berbagai jenis produk yang ditawarkan oleh toko grosir dengan fokus pada kualitas, inovasi, dan keunggulan masing-masing produk. Hal ini dapat membantu calon pembeli untuk merasa yakin dan tertarik untuk berbelanja di toko tersebut.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Fashion Kekinian</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 22 Juni, 2024</span>
							</p>
							<p class="excerpt">Hadapi kota dengan gaya dengan Sepatu Keren "UrbanStride" dari koleksi terbaru kami. Sepatu ini tidak hanya menawarkan tampilan yang trendi namun juga kenyamanan luar biasa untuk menemani langkah Anda sepanjang hari.</p>
							<a href="single-news.html" class="read-more-btn">Selengkapnya <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Barang Elektronik Minimasil Dan Efesien</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 22 Juni, 2024</span>
							</p>
							<p class="excerpt">Melangkah ke masa depan dengan gadget elektronik mutakhir kami yang dirancang untuk meningkatkan kehidupan sehari-hari Anda.</p>
							<a href="single-news.html" class="read-more-btn">Selengkapnya <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Barang Rumah Tangga Minimalis Berkualitas</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 22 Juni, 2024</span>
							</p>
							<p class="excerpt">destinasi utama Anda untuk barang rumah tangga minimalis berkualitas tinggi. Kami memahami bahwa rumah adalah tempat untuk beristirahat dan menginspirasi, itulah sebabnya kami menawarkan produk yang tidak hanya fungsional tetapi juga estetis, untuk menciptakan ruang yang nyaman dan indah.</p>
							<a href="single-news.html" class="read-more-btn">Selengkapnya <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

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


