<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>



    @for ($i = 0; $i < count($pizza); $i++) <p>{{ $pizza[$i]['type'] }}</p>
        @endfor

        @foreach ($pizza as $piz)
        <div>
            {{ $loop->index }} {{ $piz['type'] }} - {{ $piz['base'] }}
        </div>
        @endforeach


</body>

</html>