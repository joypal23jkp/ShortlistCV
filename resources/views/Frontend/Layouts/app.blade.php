<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shortlist CV - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"></head>
<body>
       <div class="card-header">
           <ul class="nav justify-content-end">
               <li class="nav-item">
                   <a class="nav-link active" href="#">Name</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">CV</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Link</a>
               </li>
               <li class="nav-item">
                   <button type="submit" class="btn btn-outline-info">Login</button>
               </li>
           </ul>
       </div>

    @show

    <div class="container">
        @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
