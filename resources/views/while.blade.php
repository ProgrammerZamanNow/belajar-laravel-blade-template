<html>

<body>

@while($i < 10)
    The current value is {{$i}}
    @php
        $i++;
    @endphp
@endwhile

</body>

</html>
