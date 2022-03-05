<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no,address=no,email=no">
	<meta name="robots" content="noindex">

    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->


    <!-- Fonts -->
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ image('favicon.ico') }}" />
    <!-- Styles -->
    <link href="{{ css('reset-min.css') }}" rel="stylesheet">
    <link href="{{ css('principal.css') }}" rel="stylesheet">
    <link href="{{ css('global.css') }}" rel="stylesheet">
    <link href="{{ css('contact-form.css') }}" rel="stylesheet">
    <link href="{{ css('contents.css') }}" rel="stylesheet">    <link href="{{ css('spectrum.css') }}" rel="stylesheet">

	{{-- <link href="{{ css('jquery.datetimepicker.min.css') }}" rel="styleshe t"> --}}
 	<link href="{{ css('jquery-ui-timepicker-addon.css') }}" rel="stylesheet">
 	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jqu ry-ui.css">
 	<link rel="stylesheet" href="{{ css('bootstrap-datepicker.standalone.css') }}">  	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">


	@yield('pageCss')

</head>
<body>
    @if( session('flash.error') )
    @foreach (session('flash') as $key => $item)
    <div class="alert alert-{{ $key }}">{{ session('flash.' . $key) }}</div>
    @endforeach
    @endif

    <div class="wrapper @yield('addClass')">
        @yield('sub')
        <div class="main-contents active">
            @yield('header')
            <main>
                {{ breadcrumb_render() }}
                @yield('content')
            </main>
        </div>

        {{-- 共通モーダル --}}
        <div class="modal-content common-alert-modal" style="max-width: max-content">
            <div class="modal-ttl">
                <h4 class="common-alert-title"></h4>
                <p class="modal-close">×</p>
            </div>
            <div class="modal-inner">
                <p class="common-alert-content"></p>
                <div class="modal-btn_ar">
                    <button type="button" class="yes common-alert-button"></button>
                </div>
            </div>
        </div>
    </div>

    {{-- ローディング中 --}}
    <div class="loading-block">
        <div class="loading-overlay">
            <div class="loading-wrapper">
                <p class="loading-text">loading...</p>
                <div class="loader"></div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ js('bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ js('bootstrap-datepicker.ja.min.js') }}"></script>
    <script>$.fn.bsDatepicker = $.fn.datepicker;</script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://rawgit.com/jquery/jquery-ui/master/ui/i18n/datepicker-ja.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

<script src="{{ js('spectrum.js') }}"></script>
    <script src="{{ js('jquery-ui-timepicker-addon.min.js') }}"></script>
    <script src="{{ js('moment.min.js') }}"></script>
    <script src="{{ js('app.js') }}"></script>

</body>
</html>
