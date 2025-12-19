@extends('layout/master')
@section('title', 'หน้ารายชื่อนักศึกษา')
    @section('content')
    <h2>รายชื่อนักศึกษา</h2>

    <table class="table" border="1">
        <thead>
            <th>รหัสนักศึกษา</th>
            <th>ชื่อ-สกุล</th>
            <th>สาขา</th>
        </thead>
        <tbody>
            @foreach ($students as $s)
                <tr>
                    <td>{{ $s['stdid'] }}</td>
                    <td>{{ $s['stdname'] }}</td>
                    <td>{{ $s['major'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h3>เพิ่มนักศึกษาใหม่</h1>
    <form method="POST" action="{{ route('students.create') }}">
        @csrf
        <input class="" type="text" name="stdid" id="รหัสนักศึกษา" value="68309010004">
        <input class="" type="text" name="stdname" id="ชื่อ-สกุล" value="aushdfkuyad">
        <input class="" type="text" name="major" id="สาขา" value="aiushdiuahsd"><br>
        <button class="btn btn-success mt-3" type="submit">เพิ่มข้อมูล</button>
    </form>
    
    <h3>ลบข้อมูล</h3>
    <form method="POST" action="{{ route('students.delete') }}">
        @csrf
        <input type="text" name="stdid" placeholder=""รหัสนักศึกษา id=""><br>
        <button class="btn btn-danger mt-3" type="submit">ลบ</button>
    </form>

    <h3>แก้ไขข้อมูล</h1>
    <form method="POST" action="{{ route('students.update') }}">
        @csrf
        <input class="" type="text" name="stdid" id="รหัสนักศึกษา (ที่จะเปลี่ยน)">
        <input class="" type="text" name="stdname" id="ชื่อ-สกุลใหม่">
        <input class="" type="text" name="major" id="สาขาใหม่"><br>
        <button class="btn btn-warning mt-3" type="submit">แก้ไช</button>
    </form>
@endsection