<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Multimédia - ISMT - Aplicação</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fontawesome-free/web-fonts-with-css/css/fontawesome-all.min.css') }}">
        <script  src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    
    </head>
    <body>
        <header>
            @include('layouts.menu')
        </header>
        <main class="container-fluid" style="padding: 0px !important">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            
            <div class="container-fluid">
				@if(session('flash_message'))
			    	<div class="alert alert-success">
			    		{{ session('flash_message') }}
			    	</div>
				@endif
			</div>

            @yield('content')
        </main>
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/moment-with-locales.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
    </body>
</html>