<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students = [
        ["stdid" => "68309010001", "stdname" => "นายสมชาย ใจดี", "major" => "เทคโนโลยีสารสนเทศ"],
        ["stdid" => "68309010002", "stdname" => "นายสมศักดิ์ ใจดำ", "major" => "เทคโนโลยีสารสนเทศ"],
        ["stdid" => "68309010003", "stdname" => "นายสมรักษ์ คำสิงห์", "major" => "เทคโนโลยีสารสนเทศ"],
    ];

    public function index() {
        $students = $this->students;
        return view('students', compact('students'));
    }

    public function create(Request $request) {
        // จำลองการเพิ่มข้อมูล
        $newStudent = [
            'stdid' => $request->stdid,
            'stdname' => $request->stdname,
            'major' => $request->major
        ];

        // รวมข้อมูลใหม่ (จำลอง)
        $students = $this->students;
        $students[] = $newStudent;

        return view('students', compact('students'));
    }

    public function delete(Request $request) {
        $students = array_filter($this->students, function ($s) use ($request) {
            return $s['stdid'] != $request->stdid;
        });
        return view('students', compact('students'));
    }

    public function update(Request $request) {
        $students = $this->students;
        foreach ($students as &$s) {
            if($s['stdid'] == $request->stdid) {
                $s['stdname'] = $request->stdname;
                $s['major'] = $request->major;
            }
        }
        return view('students', compact('students'));
    }
}
