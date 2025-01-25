<html>
    <body>
        {{-- @unless dan @endunless adalah kebalikan dari if, jika nilai nya false maka akan dieksekusi --}}
        @unless ($isAdmin)
            Youre not Admin
        @endunless
    </body>
</html>