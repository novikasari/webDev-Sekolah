<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index',compact('teachers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      $request->validate([
          'nama_guru' => 'required',
          'jenis_kelamin' => 'required',
          'tanggal_lahir' => 'required',
          'alamat_guru' => 'required',
          'no_telepon' => 'required',
          'input_date ' => 'required'
      ]);
      Teacher::create($request->all());

      return redirect('/teachers')->with('status', 'Data Guru Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show',compact('teacher')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        Teacher::where('id', '$teacher->id_guru')
            ->update([
                'nama_guru' => $request->nama_guru,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat_guru' => $request->alamat_guru,
                'no_telepon' => $request->no_telepon,
                //'input_date ' => $request->input_date
            ]);
            return redirect('/teachers')->with('status', 'Data Guru Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);

        return redirect('/teachers')->with('status', 'Data Guru Berhasil dihapus !');
    }
}
