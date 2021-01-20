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
       <div class="card-header bg-transparent">
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
                   <div>
                       <div class="dropleft">
                           <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <span class="sr-only">Toggle Dropleft</span>
                           </button>
                           <div class="dropdown-menu">
                               <form method="post" action="{{ route('logout') }}">
                                   @csrf
                                   <button type="submit" class="btn btn-outline-info">Logout</button>
                               </form>
                           </div>
                       </div>
                   </div>
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
