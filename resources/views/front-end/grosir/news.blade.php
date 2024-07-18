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

						<h1>News</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
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
							<a href="single-news.html" class="read-more-btn">baca selanjutnya <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Barang Elektronik Minimasil Dan Efesien.</a></h3>
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
							<p class="excerpt">Panci presto "Chef's Choice" adalah pilihan terbaik untuk memasak lebih cepat dan lebih efisien di dapur Anda. Dirancang dengan teknologi mutakhir, panci ini menggabungkan kualitas premium dengan keamanan yang tak tertandingi.</p>
							<a href="single-news.html" class="read-more-btn">Selengkapnya <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-4"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Kosmetik Lokal</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 23 Juni, 2024</span>
							</p>
							<p class="excerpt">Raih pesona alami dengan rangkaian kosmetik lokal kami yang dirancang khusus untuk kulit wanita Indonesia. Menggabungkan bahan-bahan alami berkualitas dengan teknologi mutakhir, setiap produk kami diciptakan untuk memancarkan kecantikan sejati Anda.</p>
							<a href="single-news.html" class="read-more-btn">Selengkapnya <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-5"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Scincare</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 23 Juni, 2024</span>
							</p>
							<p class="excerpt">rumah bagi rangkaian produk perawatan kulit lokal yang dirancang khusus untuk memenuhi kebutuhan unik kulit Anda. Kami bangga mempersembahkan formula alami yang dihasilkan dari kekayaan alam Indonesia, memberikan manfaat optimal dengan sentuhan tradisi dan inovasi.</p>
							<a href="single-news.html" class="read-more-btn">Selengkapnya <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.html"><div class="latest-news-bg news-bg-6"></div></a>
						<div class="news-text-box">
							<h3><a href="single-news.html">Furniture Kualitas Dan Minimalis</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 23 Juni, 2024</span>
							</p>
							<p class="excerpt">destinasi Anda untuk furnitur lokal yang memadukan keindahan desain, kualitas tinggi, dan sentuhan seni tradisional. Kami bangga menghadirkan koleksi furnitur yang dirancang dengan penuh cinta dan keterampilan oleh pengrajin terbaik dari seluruh Indonesia.</p>
							<a href="single-news.html" class="read-more-btn">Selengkapnya <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>

			{{-- <div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a href="#">Prev</a></li>
									<li><a href="#">1</a></li>
									<li><a class="active" href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
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


