<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = DB::table('images_tables')->orderBy('id', 'desc')->get();
        return view('upload', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg, jpeg, png|max:2048'
        ]);

        //รับไฟล์รูปภาพ
        $file = $request->file('image');
        $filename = time().'_'.$file->getClientOriginalName();

        //บันทึกไฟล์ลงโฟล์เดอร์ public/uploads
        $file->move(public_path('uploads'), $filename);

        //บันทึกข้อมูลเข้า DB
        DB::table('images_tables')->insert ([
            'title' => $request->title,
            'filename' => $filename,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'อัพโหลดูปภาพเรียบร้อย');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
