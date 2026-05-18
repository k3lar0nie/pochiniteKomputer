<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Markedia - Marketing Blog Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('style.css') }}" rel="stylesheet">

<!-- Animate styles for this template -->
<link href="{{ asset('css/animate.css') }}" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

<!-- Colors for this template -->
<link href="{{ asset('css/colors.css') }}" rel="stylesheet">

<!-- Version Marketing CSS for this template -->
<link href="{{ asset('css/version/marketing.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<header class="market-header header">
  <div class="container-fluid">
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="marketing-index.html"><img src="{{ asset('images/version/market-logo.png') }}" alt=""></a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.single', ['slug' => 'marketing']) }}">Marketing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.single', ['slug' => 'dolaeb']) }}">Make Money</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.single', ['slug' => 'pidoras']) }}">Blog</a>
          </li>
          
        </ul>
        <form class="form-inline" method="get" action="{{ route('search') }}">
          <input class="form-control mr-sm-2 @error('s') is-invalid @enderror
          " name="s" type="text" placeholder="How may I help?" required>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </div><!-- end container-fluid -->
</header><!-- end market-header -->
