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
                            @foreach ($category as $item)
                            <li class="active" data-filter="*">{{ $item }}</li>
                            @endforeach
                            {{-- <li data-filter=".strawberry">Fashion</li>
                            <li data-filter=".berry">Elektronik</li>
                            <li data-filter=".lemon">Furniture</li> --}}
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
                @foreach ($products as $item)
                    <div class="col-lg-4 col-md-6 text-center {{ $category->category }}">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="{{ asset('Storage/' . $item->image ) }}" alt=""></a>
                            </div>
                            <h3>{{ $item->nama_barang }}</h3>
                            <p class="product-price"><span></span> Rp {{ $item->price }} </p>
                            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Ke Keranjang</a>
                        </div>
                    </div>
                @endforeach
            </div>
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
