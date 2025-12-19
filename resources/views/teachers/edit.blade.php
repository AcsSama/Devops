<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>ฟอร์มแก้ไขข้อมูล</title>
</head>
<body>
    <div class="container mt-4">
        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">รหัสครู</label>
                <input type="text" class="form-control" name="teaid" id="teaid" value="{{ $teacher->teaid }}">
            </div>

            <div class="mb-3">
                <label class="form-label">ชื่อครู</label>
                <input type="text" class="form-control" name="teaname" id="teaname" value="{{ $teacher->teaname }}">
            </div>

            <div class="mb-3">
                <label class="form-label">แผนกวิชา</label>
                <input type="text" class="form-control" name="major" id="major" value="{{ $teacher->major }}">
            </div>

            <div class="mb-3">
                <label class="form-label">เบอร์โทร</label>
                <input type="text" class="form-control" name="telephone" id="telephone" value="{{ $teacher->telephone }}">
            </div>

            @if($teacher->teaimg)
                <div class="mb-3">
                    <label class="form-label">รูปเดิม</label><br>
                    <img src="{{ asset('teacherImage/'.$teacher->teaimg) }}" alt="teacher image" width="120">
                </div>
            @endif

            <div class="mb-3">
                <label class="form-label">เปลี่ยนรูปครู (ถ้าไม่เลือกจะใช้รูปเดิม)</label>
                <input type="file" class="form-control" name="teaimg" id="teaimg">
            </div>

            <div class="mb-3">
                <input type="submit" class="form-control btn btn-success" value="บันทึก">
            </div>
        </form>
    </div>
</body>
</html>
