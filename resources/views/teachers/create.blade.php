<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>เพิ่มข้อมูลครู</title>
</head>
<body>
    <div class="container mt-4">
        <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label">รหัสครู</label>
                <input type="text" class="form-control" name="teaid" id="teaid" placeholder="กรุณากรอกรหัสครู">
            </div>

            <div class="mb-3">
                <label class="form-label">ชื่อครู</label>
                <input type="text" class="form-control" name="teaname" id="teaname" placeholder="กรุณากรอกชื่อครู">
            </div>

            <div class="mb-3">
                <label class="form-label">แผนกวิชา</label>
                <input type="text" class="form-control" name="major" id="major" placeholder="กรุณากรอกแผนกวิชา">
            </div>

            <div class="mb-3">
                <label class="form-label">เบอร์โทร</label>
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="กรุณากรอกเบอร์โทร">
            </div>

            <div class="mb-3">
                <label class="form-label">รูปครู</label>
                <input type="file" class="form-control" name="teaimg" id="teaimg">
            </div>

            <div class="mb-3">
                <input type="submit" class="form-control btn btn-success" value="บันทึก">
            </div>
        </form>
    </div>
</body>
</html>
