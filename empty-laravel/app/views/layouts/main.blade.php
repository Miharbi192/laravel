<!DOTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        @section('head')
        <link href="{{URL::asset('css/main.css')}}" rel="stylesheet" media="screen, projection">
    </head>
    <body>
        @yield('header')
        @yield('body')
    </body>
</html>