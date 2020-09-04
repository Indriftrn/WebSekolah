<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;
use App\Models\Grade;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::orderby('nis', 'DESC')->get();
        return view('admin.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        return view('admin.student.tambah', compact('grades'));
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
                    $kelas = new Grade();
                    $kelas->name = $request->name;
                    $kelas->save();      
                    if(isset($kelas['id'])){
                        $insert = Student::create([
                            'nis' => $request->nis,
                            'name' => $request->name_siswa,
                            'email' => $request->email,
                            'grade_id' =>$kelas['id'],
                            'address' => $request->address,
                            'phone_number'=>$request->phone_number,
                            'gender'=>$request->gender,
                            'birthday' =>$request->birthday,
                        ]);
                    }
                }     
                else{
                    $insert = Student::create([
                    'nis' => $request->nis,
                    'name' => $request->name_siswa,
                    'email' => $request->email,
                    'grade_id' =>$request->grade_id,
                    'address' => $request->address,
                    'phone_number'=>$request->phone_number,
                    'gender'=>$request->gender,
                    'birthday' =>$request->birthday,
                    ]);
                }
                
            DB::commit();
            return redirect('/admin/student')->with('sukses', 'Data Berahsil Disimpan');            
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
        $students = Student::find($id);
        $grades = Grade::all();
        return view('admin.student.edit', compact('students','grades'));
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
            $isi = Student::where('id',$id)->first();
            if (isset($request->name) && $request->name) {
                $grades = new Grade();
                $grades->name = $request->name;
                $grades->save();      
                if(isset($grades['id'])){
                    $isi->update([
                        'nis' => $request->nis,
                        'name' => $request->name_siswa,
                        'email' => $request->email,
                        'grade_id' =>$grades['id'],
                        'address' => $request->address,
                        'phone_number'=>$request->phone_number,
                        'gender'=>$request->gender,
                        'birthday' =>$request->birthday,
                    ]);
                }
            } else{
                $isi->update([
                    'nis' => $request->nis,
                    'name' => $request->name_siswa,
                    'email' => $request->email,
                    'grade_id' =>$request->grade_id,
                    'address' => $request->address,
                    'phone_number'=>$request->phone_number,
                    'gender'=>$request->gender,
                    'birthday' =>$request->birthday,
                ]);
            }    
           
           DB::commit();
            return redirect('/admin/student')->with('sukses', 'Data Berahsil DiUpdate');            
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
        Student::find($id)->delete();
        return redirect('/admin/student')->with('sukses', 'Data Berhasil Dihapus');            
    }
}
