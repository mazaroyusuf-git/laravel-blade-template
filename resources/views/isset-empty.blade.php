<html>
    <body>
        {{-- blade juga menyediakan directive @isset untuk mengencek apakah sebuah var ada dan tidak null dan @empty
            untuk mengecek apakah sebuah variable merupakan array kosong --}}
        <p>
            @isset($name)
                Hello, my name is {{$name}}
            @endisset
        </p>
        <p>
            @empty($hobbies)
                i dont have hobbies
            @endempty
        </p>
    </body>
</html>