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
	@php
    $index = 1;
    @endphp
            <!-- latest news -->
            <div class="latest-news mt-150 mb-150">
                <div class="container">
                    <div class="row">
                        @foreach ($news as $item)
                            <div class="col-lg-4 col-md-6">
                                <div class="single-latest-news">
                                    @php
                                        $bgIndex = $index % 11;
                                    @endphp
                                    <a href="single-news.html">
                                        <div class="latest-news-bg news-bg-{{ $bgIndex }}"></div>
                                    </a>
                                    <div class="news-text-box">
                                        <h3><a href="single-news.html">{{ $item->jenis_barang }}</a></h3>
                                        <p class="blog-meta">
                                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                                            <span class="date"><i class="fas fa-calendar"></i> {{ $item->updated_at }}</span>
                                        </p>
                                        <p class="excerpt">{{ $item->deskripsi }}</p>
                                        <a href="single-news.html" class="read-more-btn">baca selanjutnya <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @php
                                $index++;
                            @endphp
                        @endforeach
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


