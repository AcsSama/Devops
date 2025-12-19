@extends('layout/master')
@section('title', 'หน้าบุคลากร')
    @section('content')
    <h1>รายชื่อครูแผนกไอที</h1>
    <table class="table" border="1">
        <thead>
            <th>teaid</th>
            <th>teaname</th>
            <th>major</th>
        </thead>
        <tbody>
            @foreach ($teacher as $row)
                <tr>
                    <td>{{ $row['teaid'] }}</td>
                    <td>{{ $row['teaname'] }}</td>
                    <td>{{ $row['major'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection