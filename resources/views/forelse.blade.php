<html>
<body>
<ul>
    @forelse($hobbies as $hobby)
        <li>{{$hobby}}</li>
    @empty
        <li>Tidak Punya Hobby</li>
    @endforelse
</ul>
</body>
</html>
