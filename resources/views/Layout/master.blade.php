<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','my web')</title>
</head>
<body>
    <header><a href="/home"> Home </a> | <a href="/create"> Create </a> | <a href="/login"> Login </a></head>
<hr>
<div>
@yield("content")
</div>

</body>
</html>