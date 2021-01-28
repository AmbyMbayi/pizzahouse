<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Pizza Hub</h2>
    <p>{{ $company }}</p>
    <p>{{ $firstname }}</p>
    <p>{{ $type }}</p>

    @if($price > 10)
    <p>name does not exist</p>
    @elseif($price < 5) <p>this pizza is cheap</p>

        @endif
        @unless ($firstname=='amby')
        <p>you dont have amby</p>
        @endunless

</body>

</html>