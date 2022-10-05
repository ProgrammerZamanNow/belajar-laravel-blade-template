<html>
<body>
@inject('service', 'App\Services\SayHello')
<h1>{{ $service->sayHello($name)  }}</h1>
</body>
</html>
