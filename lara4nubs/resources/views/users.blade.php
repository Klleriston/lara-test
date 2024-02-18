<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <marquee behavior="" direction="">
        {{$username }}
    </marquee>

    @if($username == "KEKZ")
        <h1>
            TOME PHPOLA
        </h1>
    @elseif($username == "FUU")
        <h1>
            sei la porra
        </h1>
    @endif
</body>

</html>