<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>News</title>
      <base href="{{asset('')}}">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="style/style.css">
      <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.0-web/css/all.css">
      <script type="text/javascript" src="js/jquery-3.4.1.min.js" ></script>
      <script type="text/javascript" src="js/jquery.validate.min.js"></script>
   </head>
   <body style="height: 1500px;">
      <div class="container-fluid">
         @include('layout.header')
         @include('layout.menu')
         @yield('noidung')
         @include('layout.footer')
      </div>
   </body>
   <script type="text/javascript" src="{{ asset('style/file.js')}}"></script>
   <script type="text/javascript" src="{{ asset('style/file1.js')}}"></script>
   <script type="text/javascript" src="{{ asset('style/file2.js')}}"></script>
   <script type="text/javascript" src="{{ asset('style/jquery.js')}}"></script>
   <script type="text/javascript" src="{{ asset('style/jquery2.js')}}"></script>
</html>