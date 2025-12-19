<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class ="container">
    <h3>ข้อมูลครูผู้สอน</h3>
    <table class="table">
        <thead>
            <th>
                <a href="{{ route('teachers.create') }}"><button class="btn btn-primary btn-sm">เพิ่ม</button></a>
            </th>
            <th>teaimg</th>
            <th>teaname</th>
            <th>major</th>
            <th>telephone</th>
            <th>tools</th>
        </thead>
        <tbody>
            @foreach ($teachers as $rw)

            <tr>
                <td>{{ $rw->teaid }}</td>
                <td><img src="{{ asset('teacherImage/'.$rw->teaimg) }}" style="width: 40px; height: 40px; object-fit: cover;"></td>
                <td>{{ $rw->teaname }}</td>
                <td>{{ $rw->major }}</td>
                <td>{{ $rw->telephone }}</td>
                <td>
                    <a href=" {{ route('teachers.edit', $rw->id) }}"><button class="btn btn-success btn-sm">แก้ไข</button></a>
                    <form method="post" action="{{ route('teachers.destroy', $rw->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">ลบ</button>
                    </form>
                    
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>