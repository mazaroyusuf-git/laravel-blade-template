<html>
    <body>
        {{-- blade juga punya directive yang mengambil informasi dari environtment seperti pada facade Env --}}
        @env("testing")
            This is test environment
        @endenv
    </body>
</html>