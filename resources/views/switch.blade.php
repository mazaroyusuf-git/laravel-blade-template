<html>
    <body>
        {{-- selain if statement kita juga bisa menggunakan switch statement di blade dengan menggunakan @switch, 
            @case, @break, @default, @endswitch --}}
            
        @switch($value)
            @case('A')
                Memuaskan
                @break
            @case('B')
                Bagus
                @break
            @case('C')
                Cukup
                @break
            @default
                Tidak Lulus
        @endswitch
    </body>
</html>