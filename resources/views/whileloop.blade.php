<html>
    <body>
        {{-- kita juga bisa melakukan while loop di blade dengan menggunakan @while dan @endwhile --}}
        @while($i < 10)
            The Current value is {{$i}}
            @php
                $i++
            @endphp
        @endwhile
    </body>
</html>