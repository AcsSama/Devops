<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ฟอร์มแก้ไขข้อมูล</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('studentdb.update', $studentdb->id) }}" method="POST">

            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="stdid" id="stdid" value="{{ $studentdb->stdid}}">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ชื่อนักศึกษา</label>
                <input type="text" class="form-control" name="stdname" id="stdname" value="{{ $studentdb->stdname}}">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">แผนกวิชา</label>
                <input type="text" class="form-control" name="major" id="major" value="{{ $studentdb->major}}">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">เบอร์โทร</label>
                <input type="text" class="form-control" name="telephone" id="telephone" value="{{ $studentdb->telephone}}">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn-success" value="บันทึก">
            </div>
        </form>
    </div>
</body>
</html>