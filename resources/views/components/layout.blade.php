<html>
    <head>
        <title>{{ $title ?? 'Title' }}</title>
    </head>
    <body>
        <h1>{{ $title ?? 'Title' }}</h1>
        <hr/>
        {{ $slot }}
    </body>
</html>