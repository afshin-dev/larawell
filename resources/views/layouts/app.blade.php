<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
</head>
<body>
    @if(session("msg-create"))
        <div style="background-color: green; color : white;">
            {{session("msg-create")}}
        </div>
    @endif
    @yield("content")

</body>
</html>