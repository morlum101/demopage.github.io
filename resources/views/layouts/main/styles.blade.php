<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="{{ config('app.name') }}" />
<meta name="author" content="{{ config('app.name') }}">
<meta name="keywords" content="{{ config('app.name') }}">
<meta name="robots" content="index, follow" />
<meta property="og:title" content="{{ config('app.name') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ route('main.home') }}" />
<meta property="og:image" content="{{ asset('img/size-cover.png') }}" />
<meta property="og:image:type" content="image/png" />
<meta property="og:image:width" content="820" />
<meta property="og:image:height" content="360" />
<meta property="og:image:alt" />
<meta property="og:description" content="{{ config('app.name') }}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:locale" content="en_US" />
<meta property="article:author" content="{{ config('app.name') }}" />
<meta name="csrf-token" content="{{ csrf_token() }}">

{{-- favicon --}}
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">

{{-- preloader --}}
<link rel="stylesheet" href="{{ URL::asset('assets/css/core/preloader.min.css') }}" type="text/css" />

{{-- bootstrap --}}
<link href="{{ URL::asset('assets/css/core/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
{{-- icons css --}}

<link href="{{ URL::asset('assets/css/core/icons.min.css') }}" rel="stylesheet" type="text/css" />
{{-- app css --}}
<link href="{{ URL::asset('assets/css/core/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
