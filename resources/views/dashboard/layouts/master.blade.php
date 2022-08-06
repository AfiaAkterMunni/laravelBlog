<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
            <a href="{{route('homePage')}}" class="navbar-brand">Calvin</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a href="{{route('homePage')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="{{route('profile')}}" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="posts.html" class="nav-link">Posts</a>
                    </li>
                    <li class="nav-item px-2">
                        <a href="categories.html" class="nav-link">Categories</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <a href="{{route('profile')}}" class="nav-link">
                            <i class="fas fa-user"></i> Welcome Istiak Tushar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout_form').submit();"><i class="fas fa-user-times"></i> Logout</a>
                        <form method="POST" action="{{route('logout')}}" id="logout_form" style="display: none">
                            @csrf
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </nav><!-- ./NAVBAR -->

    @yield('content')

    <!-- FOOTER -->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">Copyright &copy; 2022 Calvin | Developed By Munni</p>
                </div>
            </div>
        </div>
    </footer><!-- ./FOOTER -->

     <!-- Bootstrap jQuery -->
     <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
     <script src="{{asset('js/popper.min.js')}}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
     <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
     <script>
         CKEDITOR.replace('editor1');
     </script>
 </body>

 </html>
