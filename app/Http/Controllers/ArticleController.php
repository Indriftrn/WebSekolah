<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use DB;
use \Illuminate\Support\Str;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'Desc')->get();
        return view ('admin.artikel.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view ('admin.artikel.tambah', compact('categories'));
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
    
                $thumbnail = $request->file('thumbnail');
                $thumbnail_article = rand() . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move(public_path('storage/uplods/media'), $thumbnail_article);
            
                $insert = Article::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'summer' => str_limit($request->description, 20),
                    'category_id' => $request->category_id,
                    'thumbnail' =>$thumbnail_article,
                    'slug' => Str::slug($request->title)
                ]);
            DB::commit();
            return redirect('/admin/article')->with('sukses', 'Data Berahsil Disimpan');            
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