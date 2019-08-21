<!DOCTYPE html>
<html lang="en">
   <title> @yield('title')</title>
<head>
    @include('navbar.head')
</head>
<body>
    <div class="header">
        @include('navbar.header')
    </div>
    <div class="content" id="content">
        @yield('content')
    </div>

   <div class="footer-row" id="row">
        @include('footer.footer')
   </div>
</body>
</html>