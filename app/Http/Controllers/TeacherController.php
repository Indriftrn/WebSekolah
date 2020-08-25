<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $articles = Teacher::orderBy('created_at', 'Desc')->get();
        return view ('admin.guru.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view ('admin.guru.tambah', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        DB::beginTransaction();
        try {
            if (isset($request->name) && $request->name) {
                $courses = new Course();
                $courses->name = $request->name;
                $courses->save();      
                DB::commit();        
                return redirect()->back();
            }     
    
                $thumbnail = $request->file('thumbnail');
                $thumbnail_article = rand() . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move(public_path('storage/uplods/media'), $thumbnail_teacher);
            
                $insert = Article::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'summer' => str_limit($request->description, 20),
                    'couse_id' => $request->course_id,
                    'thumbnail' =>$thumbnail_teacher,
                    'slug' => Str::slug($request->title)
                ]);
            DB::commit();
            return redirect('/admin/teacher')->with('sukses', 'Data Berahsil Disimpan');            
        } catch (\Exception $ex) {
            DB::rollback();
            throw $ex;
        }    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
