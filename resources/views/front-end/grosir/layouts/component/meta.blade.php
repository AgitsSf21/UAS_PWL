<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>{{ $title }}</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('fruit/assets/img/VELARIS (3).png') }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('fruit/assets/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('fruit/assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ asset('fruit/assets/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ asset('fruit/assets/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ asset('fruit/assets/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ asset('fruit/assets/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('fruit/assets/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('fruit/assets/css/responsive.css') }}">

    <style>
        .logout-button {
            background: none;
            border: none;
            color:rgb(255, 255, 255);
            cursor: pointer;
            font: 'Open-Sans';
            outline: inherit;
            padding: 0;
            margin: 0;
            padding: 15px;
            font-family: "Open Sans", sans-serif;
            font-weight:bold;
        }
    </style>

@if (Route::is('news'))
    <style>
        .news-bg-1 {
            background-image: url({{ asset('Storage/' . $news[0]->image) }});
        }
        .news-bg-2 {
            background-image: url({{ asset('Storage/' . $news[1]->image) }});
        }
        .news-bg-3 {
            background-image: url({{ asset('Storage/' . $news[2]->image) }});
        }
        .news-bg-4 {
            background-image: url({{ asset('Storage/' . $news[3]->image) }});
        }
        .news-bg-5 {
            background-image: url({{ asset('Storage/' . $news[4]->image) }});
        }
        .news-bg-6 {
            background-image: url({{ asset('Storage/' . $news[5]->image) }});
        }
    </style>
@endif

</head>
<body>
