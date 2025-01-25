<html>
    <body>
        {{-- kita juga bisa melakukan foreach di blade dengan @foreach --}}
        <ul>
            @foreach($hobbies as $hobby)
                <li>{{ $hobby }}</li>
            @endforeach
        </ul>
    </body>
</html>