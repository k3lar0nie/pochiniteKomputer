@include('layouts.navbar')
@yield('navbar')

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

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
  <div class="page-title db">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">domoy</a></li>
            <li class="breadcrumb-item active">Search</li>

          </ol>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <h2>Search: {{ $s }}</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="page-wrapper">
    <div class="blog-custom-build w-50 mx-auto">
      @if ($posts->count())
        @foreach ($posts as $post)
            <div class="blog-box wow fade-in">
              <div class="post-media">
                <a href="{{ route('posts.single', ['slug' => $post->slug]) }}" title="">
                  <img src="{{ $post->getImage() }}" alt="" class="img-fluid">
                  <div class="hovereffect">
                    <span></span>
                  </div>
                </a>
              </div>

              <div class="blog-meta big-meta text-center">
                <div class="post-sharing"></div>
                <h4><a href="{{ route('posts.single', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h4>

                {!! $post->description !!}
                <small><a
                    href="{{ route('categories.single', ['slug' => $post->category->slug]) }}">{{ $post->category->title }}</a></small>
                <small>{{ $post->getPostDate() }}</small>
                <small><i class="fa fa-eye"></i>{{ $post->views }}</small>

              </div>



            </div>
            <hr class="invis">
          @endforeach
      @else
        по запрому вашесу начено не нийдено
      @endif
    </div>
  </div>

  <hr class="invis">

  <div class="row">
    <div class="col-md-12">
      <nav aria-label="Page navigation">
        {{ $posts->appends(['s' => request()->s])->links() }}
      </nav>
    </div>
  </div>
