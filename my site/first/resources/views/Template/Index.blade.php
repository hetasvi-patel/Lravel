<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

    </head>
   <body>
        @include('Template.Navbar')
        @yield('Home')
        @yield('about')
        @yield('Contact')

   </body>
</html>
