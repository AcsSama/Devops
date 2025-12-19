<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center><h1>Welcome to Project</h1></center>
    <center>
        <a href="{{ url('/') }}"><button class="btn btn-success">หน้าหลัก</button></a>
        <a href="{{ url('students') }}"><button class="btn btn-success">หน้ารายชื่อนักศึกษา</button></a>
        <a href="{{ url('people') }}"><button class="btn btn-success">หน้าบุคลากร</button></a>
        <a href="{{ url('major') }}"><button class="btn btn-success">หน้าสาขาวิชา</button></a>
        <a href="{{ url('contact') }}"><button class="btn btn-success">หน้าติดต่อ</button></a>
    </center>
    <div class="pt-5">
        <center>
            @yield('content')
        </center>
    </div>
</body>
</html>