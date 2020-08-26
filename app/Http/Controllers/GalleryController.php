<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;
use DB;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'DESC')->get();
        return view('admin.galeri.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.galeri.tambah', compact('categories'));
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
                $categories = new Category();
                $categories->name = $request->name;
                $categories->save();      
                DB::commit();        
                return redirect()->back();
            }     
    
                $images = $request->file('images');
                $images_gallery = rand() . '.' . $images->getClientOriginalExtension();
                $images->move(public_path('storage/uploads/media/gallery'), $images_gallery);
            
                $insert = Gallery::create([
                    'category_id' => $request->category_id,
                    'images' =>$images_gallery,
                ]);
            DB::commit();
            return redirect('/admin/gallery')->with('sukses', 'Data Berhasil Disimpan');            
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