<html>
<head>
    <title> Capacitación - @yield('titulo') </title>

    <link rel="stylesheet" href= {{elixir('/css/app.css')}} >

</head>

<body>

@section('sidevar')
    this is the master sidevar
@show

<div class="container">
    @yield('contend')
</div>

</body>

</html>
