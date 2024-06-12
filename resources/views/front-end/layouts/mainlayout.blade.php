<!DOCTYPE html>
<html>
<head>
  <title>Codeyiizen</title>
    @include('front-end.layouts.partials.stylesheet')
    @yield('styles') 
</head>

<body>

@include('front-end.layouts.partials.script') 
@include('front-end.layouts.partials.header') 

@yield('content') 

@include('front-end.layouts.partials.footer')

@yield('scripts') 
</body>
</html>