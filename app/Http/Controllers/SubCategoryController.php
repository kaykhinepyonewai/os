<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        // $category = Category::where('id',$subcategories->category_id)->get();

        $category = Category::all();

       //  $category = $this->Subcategory
       // ->join('Category', 'Category.id', '=', 'Subcategory.category_id')
       // ->where('Subcategory.id', '=', '5')
       // ->select('Subcategory.*', 'Category.name as categoryname')
       // ->first();

        
        return view('backend.subcategories.index',compact('subcategories','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate(
         [
            'name'=>'required',
            'category'=>'required'
         ]
       );
      
       $subcategory = new Subcategory;
       $subcategory->name = $request->name;
       $subcategory->category_id=$request->category;

       $subcategory->save();

       return redirect()->route('subcategories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.subcategories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $categories = Category::all();
         $subcategory = Subcategory::find($id);
        return view('backend.subcategories.edit',compact('subcategory','categories'));
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
        $request->validate(
         [
            'name'=>'required',
            'category'=>'required'
         ]
       );
      
       $subcategory =  Subcategory::find($id);
        // $brand = Brand::find($id);
       $subcategory->name = $request->name;
       $subcategory->category_id=$request->category;

       $subcategory->save();

       return redirect()->route('subcategories.index');
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
