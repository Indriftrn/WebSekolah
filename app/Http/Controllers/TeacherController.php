<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use DB;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $teachers = Teacher::orderBy('created_at', 'Desc')->get();
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
                if (isset($request->nama_mata_pelajaran) && $request->nama_mata_pelajaran) {
                    $course = new Course();
                    $course->name = $request->nama_mata_pelajaran;
                    $course->save();      
                    if(isset($course['id'])){
                        $insert = Teacher::create([
                            'nip' => $request->nip,
                            'name' => $request->name_guru,
                            'course_id' =>$course['id'],
                            'address' => $request->address,
                            'phone_number'=>$request->phone_number,
                            'gender'=>$request->gender,
                            'birthday' =>$request->birthday,
                        ]);
                    }
                }     
                else{
                    $insert = Teacher::create([
                        'nip' => $request->nip,
                        'name' => $request->name_guru,
                        'course_id' =>$request->course_id,
                        'address' => $request->address,
                        'phone_number'=>$request->phone_number,
                        'gender'=>$request->gender,
                        'birthday' =>$request->birthday,
                    ]);
                }
                
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
        $teachers = Teacher::find($id);
        $courses = Course::all();
        return view('admin.guru.edit', compact('teachers','courses'));
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
        $data= $request->all();
        DB::beginTransaction();
        try {
            $isi = Teacher::where('id',$id)->first();
            if (isset($request->nama_mata_pelajaran) && $request->nama_mata_pelajaran) {
                $mapel = new Course();
                $mapel->name = $request->name;
                $mapel->save();      
                if(isset($mapel['id'])){
                    $isi->update([
                        'nip' => $request->nip,
                        'name' => $request->name_guru,
                        'course_id' =>$mapel['id'],
                        'address' => $request->address,
                        'phone_number'=>$request->phone_number,
                        'gender'=>$request->gender,
                        'birthday' =>$request->birthday,
                    ]);
                }
            } else{
                $isi->update([
                    'nip' => $request->nip,
                    'name' => $request->name_guru,
                    'course_id' =>$request->course_id,
                    'address' => $request->address,
                    'phone_number'=>$request->phone_number,
                    'gender'=>$request->gender,
                    'birthday' =>$request->birthday,
                ]);
            }    
           
           DB::commit();
            return redirect('/admin/teacher')->with('sukses', 'Data Berahsil DiUpdate');            
        } catch (\Exception $ex) {
            DB::rollback();
            throw $ex;
        }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::find($id)->delete();
        return redirect('/admin/teacher')->with('sukses', 'Data Berahsil Dihapus'); 
    }
}