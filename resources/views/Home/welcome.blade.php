<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>3 Kings Swimming Pool Complex</title>

    <!-- style -->
    @include('Home.components.cssJs.style')

    <!-- Fav icon -->
    @include('Home.components.cssJs.fav')



</head>

<body>

    <!--Header-->
    @include('Home.components.header')

    <!--Intro Section-->
    @include('Home.components.intro')

    <main id="main">

       


    </main>



    <!--Back to Top-->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- preloader -->
    <div id="preloader"></div>

    <!-- javaScripts -->
    @include('Home.components.cssJs.js')


</body>


</html>
