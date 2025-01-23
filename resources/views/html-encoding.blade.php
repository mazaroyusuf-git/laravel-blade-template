<html>
    <head>
        <title>HTML Encoding</title>
    </head>
    <body>
        {{-- saat kita menggunakan {{}} maka secara otomatis blade akan memanggil function htmlspecialchars(data)
        agar data aman dari XSS atau Cross Site Scripting namun jika tidak ingin menggunakan ini kita bisa gunakan
        {!! $data !!} hati2 jika menggunakan ini --}}
        <h1>{!! $name !!}</h1>
    </body>
</html>