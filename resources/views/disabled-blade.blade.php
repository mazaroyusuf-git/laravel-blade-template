<html>
    <head>
    </head>
    <body>
        <h1>Hello @{{ $name }}</h1>

        @verbatim

        <p>
            Hello {{ $name }}
        </p>

        kita bisa mengignore command dalam blade dengan menggunakan awalan @ atau @verbatim dan diakhiri dengan @endverbatim
        yang ada tanda ini command blade yang di dalam nya akan di ignore, lihat chapter 88

        @endverbatim
    </body>
</html>