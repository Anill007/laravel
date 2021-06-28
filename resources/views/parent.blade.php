<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My site</title>
</head>
<body>

    <header><h1>This is a navbar</h1></header>
    <div><h1>displayed in all page</h1></div>

    <div>
        @yield('content')
    </div>

    <div>
        @section('fromparent')
        <h4>from parent page</h4>
        @show
    </div>
    
    <div><h1>this is also displayed in all page</h1></div>
    <footer><h1>This is a footer</h1></footer>
    
</body>
</html>