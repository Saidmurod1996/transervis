<!DOCTYPE html>
<html lang="en">

@include('partials._head')


<body style="background-color: beige;">

@include('partials._header')

@include('partials._nav')

@include('partials._messages')


@yield('content')



@include('partials._footer')

@yield('script')

@include('partials._javascript')

</body>

</html>