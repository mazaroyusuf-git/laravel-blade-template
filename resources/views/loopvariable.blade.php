<html>
    <body>
        {{-- saat kita melakukan @foreach di blade terdapat variable $loop yang menyimpan informasi data yang di iterasi seperti
            index, value, dan lain2. bisa dilihat di chapter 97 --}}
        <ul>
            @foreach($hobbies as $hobby)
                <li>{{ $loop->iteration }}. {{ $hobby }}</li>
            @endforeach
        </ul>
        
    </body>
</html>