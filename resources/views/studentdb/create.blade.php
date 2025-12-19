<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('studentdb.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label class="form-label">รูปนักศึกษา</label>
                <input type="file" class="form-control" name="stdimg" id="stdimg">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="stdid" id="stdid" placeholder="กรุณากรอกรหัสนักศึกษา">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ชื่อนักศึกษา</label>
                <input type="text" class="form-control" name="stdname" id="stdname" placeholder="กรุณากรอกชื่อนักศึกษา">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">แผนกวิชา</label>
                <input type="text" class="form-control" name="major" id="major" placeholder="กรุณากรอกแผนกวิชา">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">เบอร์โทร</label>
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="กรุณากรอกเบอร์โทร">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn-success" value="บันทึก">
            </div>
        </form>
    </div>
</body>
</html>