<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My site</title>
    <link rel="stylesheet" href={{ asset('/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('/css/style1.css') }}>
</head>
<body>

    <div>
        <h1>This is a nav bar.</h1>
    </div>

    <div>
        @yield('content-body')
    </div>

    <div>
        @section('replacable')
        <h3>This can be altered.</h3>
        @stop
    </div>

    <div>
        <h1>This is a footer.</h1>
    </div>
    
</body>
</html>