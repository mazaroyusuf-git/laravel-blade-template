<html>
    <body>
        {{-- kita juga bisa melakukan for loop di php dengan menggunakan @for() lalu @endfor --}}
        <ul>
            @for($i = 0; $i < $limit; $i++)
                <li>{{ $i }}</li>
            @endfor
        </ul>
    </body>
</html>