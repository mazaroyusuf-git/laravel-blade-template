<html>
    <body>
        {{-- kadang kita saat ingin melakukan foreach namun datanya tidak ada kita bisa gunakan @forelse dan @empty --}}
        @forelse($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @empty
            <li>Tidak ada Hobbi</li>
        @endforelse
    </body>
</html>