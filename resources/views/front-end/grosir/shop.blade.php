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
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".strawberry">Fashion</li>
                            <li data-filter=".berry">Elektronik</li>
                            <li data-filter=".lemon">Furniture</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('fruit/assets/img/kaosputih.jpeg') }}" alt=""></a>
						</div>
						<h3>Kaos Polos Lokal Premium</h3>
						<p class="product-price"><span></span> Rp 30.000 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Ke Keranjang</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center berry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('fruit/assets/img/power_bank.png') }}" alt=""></a>
						</div>
						<h3>INIU Portable Charger, 20W PD3_0 QC4 0 Fast Charging</h3>
						<p class="product-price"><span></span> Rp 100.000 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Ke Keranjang</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('fruit/assets/img/kursi21.jpeg') }}" alt=""></a>
						</div>
						<h3>Kursi Makan Restoran Jok Minimalis - Sarana Mulya ®</h3>
						<p class="product-price"><span></span> Rp 60.000 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Ke Keranjang</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('fruit/assets/img/lemari.jpeg') }}" alt=""></a>
						</div>
						<h3>Lemari Minimalis</h3>
						<p class="product-price"><span></span> Rp 300.000 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Ke Keranjang</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center lemon">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('fruit/assets/img/meja.jpeg') }}" alt=""></a>
						</div>
						<h3>Meja Minimalis</h3>
						<p class="product-price"><span></span> Rp 150.000 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Ke Keranjang</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('fruit/assets/img/panda_nike_dunks.jpeg') }}" alt=""></a>
						</div>
						<h3>Panda Nike Dunks</h3>
						<p class="product-price"><span></span> Rp 1.500.000 </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Ke Keranjang</a>
					</div>
				</div>
			</div>

			{{-- <div class="row">
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
			</div> --}}
		</div>
	</div>
	<!-- end products -->

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
