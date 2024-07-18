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

						<h1>Contact us</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Apakah Anda punya pertanyaan?</h2>
						<p>Kami di Valeris selalu siap membantu Anda! Jika Anda memiliki pertanyaan, masalah, atau membutuhkan bantuan, tim layanan pelanggan kami yang ramah dan profesional siap memberikan solusi terbaik untuk Anda.</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
								<input type="tel" placeholder="Phone Number" name="phone" id="phone">
								<input type="text" placeholder="Subject" name="subject" id="subject">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<p><input type="submit" value="Kirim"></p>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Alamat Perusahaan</h4>
							<p> jln Industri <br> Purwakarta, Jawa barat <br> Indonesia</p>
						</div>
						{{-- <div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Jam Belanja</h4>
							<p>SENIN - JUM'AT: 8 sampai 9 PM <br> SABTU - MINGGU: 10 sampai 8 PM </p>
						</div> --}}
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Kontak</h4>
							<p>Phone:<br> +6285559789583 <br> Email:<br> agitssyuhada07@wastukancana.ac.id</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.7624002640544!2d107.40744367479932!3d-6.496547099999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690c68329622a5%3A0xa6d945434ce7967c!2sGC35%2B946%2C%20Jl.%20Industri%2C%20Hegarmanah%2C%20Kec.%20Babakancikao%2C%20Kabupaten%20Purwakarta%2C%20Jawa%20Barat%2041151!5e0!3m2!1sid!2sid!4v1719155652879!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->

    @include('front-end/grosir/layouts/component/footer')

    @include('front-end/grosir/layouts/component/copyright')

@endsection




