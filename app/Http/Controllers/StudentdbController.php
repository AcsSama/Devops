<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Studentdb;
use Illuminate\Http\Request;

class StudentdbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentdb = Studentdb::all();
        return view('studentdb.index', compact('studentdb'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('studentdb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'stdid' => 'required',
            'stdname' => 'required',
            'major' => 'required',
            'telephone' => 'required',
            'stdimg' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('stdimg');
        $filename = $request->stdid . '_' . $file->getClientOriginalName();
        $file->move(public_path('studentImage'), $filename);

        // ถ้าใช้ model
        Studentdb::create([
            'stdid' => $request->stdid,
            'stdname' => $request->stdname,
            'major' => $request->major,
            'telephone' => $request->telephone,
            'stdimg' => $filename,
        ]);

        return redirect()->route('studentdb.index');
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
    public function edit(Studentdb $studentdb)
    {
        return view('studentdb.edit', compact('studentdb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Studentdb $studentdb)
    {
        $request->validate([
            'stdid' => 'required',
            'stdname' => 'required',
            'major' => 'required',
            'telephone' => 'required',
            'stdimg' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['stdid', 'stdname', 'major', 'telephone']);

        if ($request->hasFile('stdimg')) {
            $file = $request->file('stdimg');
            $filename = $request->stdid . '_' . $file->getClientOriginalName();
            $file->move(public_path('studentImage'), $filename);
            $data['stdimg'] = $filename;
        }

        $studentdb->update($data);

        return redirect()->route('studentdb.index')->with('success', 'แก้ไขข้อมูลสำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Studentdb $studentdb)
    {
        $studentdb->delete();
        return redirect()->route('studentdb.index')->with('success', 'ลบข้อมูลสำเร็จ');
    }
}
