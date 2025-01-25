<html>
    <body>
        {{-- kita bisa menambahkan if statement dengan menggunakan directive, contoh nya @if @elseif @else dan @endif --}}
        <p>
            @if (count($hobbies) == 1)
                i have one hobby
            @elseif (count($hobbies) > 1)
                i have multiple hobbies!
            @else 
                i dont have a hobbies
            @endif
        </p>
    </body>
</html>