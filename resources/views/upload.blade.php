<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>หน้าอัพโหลดรูปภาพ</h1> 

        @if (session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ชื่อรูป</label>
                <input type="text" class="form-control" name="title" placeholder="ชื่อรูป">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">เลือกรูป</label>
                <input type="file" class="form-control" name="image" placeholder="กรุณากรอกชื่อนักศึกษา">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="บันทึก">
            </div>
        </form>

        <div class="row">
            @foreach ($images as $rw)
                
            <div class="col-2">
                <div class="card" style="width: 10rem;">
                    <img src=" {{ asset('uploads/'.$rw->filename) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $rw->title }}</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>

            @endforeach
        </div>


    </div>
</body>
</html>