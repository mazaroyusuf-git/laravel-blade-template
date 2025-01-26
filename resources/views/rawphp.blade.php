<html>
    <body>
    {{-- kita juga bisa memasukkan code php di blade namun cara ini tidak di rekomendasikan, kita bisa gunakan @php dan @endphp --}}
    @php
        class Person
        {
            public string $name;
            public string $address;
        }

        $person = new Person();
        $person->name = "yusuf";
        $person->address = "Indonesia";

    @endphp

        <p>{{ $person->name }}</p>
        <p>{{ $person->address }}</p>

    </body>
</html>