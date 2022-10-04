<html>

<body>

<ul>
    @foreach($hobbies as $hobby)
        <li>{{ $loop->iteration }}. {{$hobby}}</li>
    @endforeach
</ul>

</body>

</html>
