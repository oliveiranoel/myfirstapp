<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'My First App')</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
        <style>
            .is-completed {
                text-decoration: line-through;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
