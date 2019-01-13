<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
{{--<h1>{{$name}}</h1>--}}

{{--<p>{{$content}}</p>--}}
<style>

    header {
        height: 100px;
        background-color: #1d68a7;
    }

    #sidebar {
        width: 200px;
        float: left;
        background-color: lightgrey;
        height: 300px;
    }

    main {
        margin-left: 200px;
        height: 300px;
        background-color: lightpink;
    }

    footer {
        background-color: lime;
        height: 100px;
    }
    .alert{
        background-color: red;
        color: white;
        padding: 20px;
    }

</style>

<header>
    @yield('header')
</header>

<div id="sidebar">
    @section('sidebar')
        This is the master sidebar.
    @show
</div>
<main>
    @yield('main')
</main>
<footer>
    @yield('footer')
</footer>
</body>
</html>
