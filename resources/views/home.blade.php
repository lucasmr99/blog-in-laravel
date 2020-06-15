<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>hello world <?php echo "$nombre" ?> </h1>
    <h1>hello world {{ $nombre }} </h1>

    <ul>
        @foreach ($posts as $post)
         <li> {{ $post }}</li>
        @endforeach

        <h1>por forelse</h1>

        @forelse ($posts as $post)

            <?php //dd($loop) ?>


            <li>
                @if ($loop->first)
                    Primero:
                @endif

                @if ($loop->last)
                Ultimo:
                @endif

                {{$post}}
            </li>

        @empty
            <li>Vacio</li>
        @endforelse
    </ul>
</body>
</html>
