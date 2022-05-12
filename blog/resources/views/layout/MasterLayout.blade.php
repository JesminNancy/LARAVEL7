<html>
  <header>
    <title>@yield('titleName')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  </header>
  <body>
  
    <div class="container py-5">
      <button type="button" class="btn btn-success">I am from Master Layout</button><br><br><br>
      <button type="button" class="btn btn-primary">@yield('buttonName')</button>
    </div>
    <div class="container">
        @yield('content')
    </div> 
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" ></script>
  </body>
</html>