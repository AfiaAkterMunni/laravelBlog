<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Registration - Calvin</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/styles.css">

    <style type="text/css" media="screen">
        .s-styles {
            padding-bottom: var(--vspace-4);
        }
        .s-styles > .row {
            max-width: var(--width-max);
        }
        .s-styles .intro h1 {
            margin-top: 0;
        }
    </style>

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>

<body id="top">
    @include('includes.navbar')

    <!-- preloader
    ================================================== -->
    <div id="preloader">
    	<div id="loader"></div>
    </div>



    <!-- content
    ================================================== -->
    <section class="">

        <section class="s-styles">
            <div class="row">
                <div class="column large-3"></div>
                <div class="column large-6 tab-12">

                    <h3 class="h-add-bottom">Registration</h3>

                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div>
                            <label for="Name">Your Name</label>
                            <input class="h-full-width" type="text" placeholder="John Doe" id="email" name="name" value="{{ old('name') }}">
                            @error('name')
                                    <p class="alert-box--error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email">Your email</label>
                            <input class="h-full-width" type="email" placeholder="test@mailbox.com" id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                    <p class="alert-box--error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input class="h-full-width" type="password" id="password" name="password">
                            @error('password')
                                    <p class="alert-box--error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="c_passowrd">Confirm Password</label>
                            <input class="h-full-width" type="password" id="c_passowrd" name="password_confirmation">
                        </div>

                        <input class="btn--primary h-full-width" type="submit" value="Submit">
                        <p>Already have an account. Login <a href="">here</a>.</p>
                    </form>

                </div>

            </div> <!-- end row -->

        </section> <!-- end s-styles -->

    </section> <!-- end s-content -->



    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
