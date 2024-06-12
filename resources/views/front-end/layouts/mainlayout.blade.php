<!DOCTYPE html>
<html>
<head>
    @include('front-end.layouts.partials.stylesheet')
    @yield('styles') 
    
@include('front-end.layouts.partials.header') 
</head>

<body>

@include('front-end.layouts.partials.script') 

@yield('content') 

@include('front-end.layouts.partials.footer')

@yield('scripts') 
</body>
</html>