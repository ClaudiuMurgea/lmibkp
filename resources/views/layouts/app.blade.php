<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js" integrity="sha512-oL84kLQMEPIS350nZEpvFH1whU0HHGNUDq/X3WBdDAvKP7jn06gHTsCsymsoPYKF/duN8ZxzzvQgOaaZSgcYtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Icons for Chevron -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/carousel.css') }}">
        @livewireStyles
    </head>
    <body   style=' max-height:100vh;min-height:100vh; height:100vh;
                    max-width:100vw; min-width:100vw;  width:100vw;' 
            class=" d-flex flex-column justify-content-between align-items-center">
        @livewireScripts
        @if(isset($slot))
            {{ $slot }}
        @endif

        
        @yield('content')
        <script src="{{url('js/carousel.js')}}"></script>
        <script src="{{url('js/myscript.js')}}"></script>
    </body>
</html>