<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name', 'ViewTutorial') }}</title>
    
    <!-- <meta content="" name="description"> -->
    <!-- <meta content="" name="keywords"> -->
    
    @yield('meta_description')
    @yield('meta_keywords')

    @include('front.layouts.headerscript')

    <style>
        pre code {
            display: block !important;
            font-size: inherit !important;
            color: darkorange !important;
            background-color: black !important;
            word-break: normal;
        }

        .blog .entry {
            padding: 5px !important;
            margin-bottom: 10px !important;
            box-shadow: 0 4px 16px rgb(0 0 0 / 10%);
        }

        .blog .sidebar .recent-posts h4 {
            font-size: 15px;
            margin-left: 5px !important;
            font-weight: bold;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #e96b56 !important;
            border-color: #e96b56 !important;
        }



        .page-link:hover {
            z-index: 2;
            color: #0a58ca;
            background-color: #e96b56 !important;
            border-color: #e96b56 !important;
        }

        .blog .entry .entry-title a {
            color: #e96b56 !important;
            /* transition: 0.3s; */
        }
    </style>


</head>

<body>
    @include('front.layouts.navbar')

    @yield('content')

    @include('front.layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    @include('front.layouts.footerscript')



</body>

</html>