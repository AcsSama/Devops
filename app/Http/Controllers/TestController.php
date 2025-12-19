<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function main() {
        return view('main');
    }

    public function people() {
        //$student = [['fname' => '','lname' => ''],['fname' => '','lname' => ''],['fname' => '','lname' => ''],['fname' => '','lname' => ''],];
        // $teacher = ['ครูฉันทพัฒน์', 'ครูภีรภัท', 'ครูปกรณ์', 'ครูพงศ์ศิริ', 'ครูสุภาพร',];
        // return view('people', 
        //     [
        //     'fname' => 'นายสมชาย',
        //     'lname' => 'ใจดี',
        //     'teacher' => $teacher,
        //     ]
        // );
        $teacher = [
            ['teaid' => '101', 'teaname' => 'ครูปกรณ์ ปัญญาดี', 'major' => 'เทคโนโลยีสารสนเทศ',],
            ['teaid' => '102', 'teaname' => 'ครูฉันทพัฒน์ สมนึกเจริญสุข', 'major' => 'เทคโนโลยีสารสนเทศ',],
            ['teaid' => '103', 'teaname' => 'ครูพงศ์ศิริ ธรรมวุฒิ', 'major' => 'เทคโนโลยีสารสนเทศ',],
        ];
        return view('people', compact('teacher'));
    }

    public function major() {
        return view('major');
    }

    public function contact() {
        return view('contact');
    }
}
