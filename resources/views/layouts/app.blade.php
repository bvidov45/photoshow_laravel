<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PhotoShow</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"  href="{{asset('css/app.css')}}" />
    
</head>
<body>
@include('inc.navbar')
<hr>
<div class="container">
    @include('inc.messages')
    @yield('content')
</div>

    
</body>
</html>