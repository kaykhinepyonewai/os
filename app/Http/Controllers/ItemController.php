<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;   //Item is Model name
use App\Brand;
use App\Subcategory;


class ItemController extends Controller
{
    //  public function __construct()
    // {
    //     $this->middleware('auth');  //->except('index'),, ->only('show')
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $items = Item::all();
        // dd($items);
        return view('backend.items.index',compact('items'));  //$items=item,<== reuse in blade foreach
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $subcategories = Subcategory::all();
        return view('backend.items.create',compact('brands','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);

        // Validation

        $request->validate([
            'codeno' => 'required|min:4',
            'name' => 'required',
            'photo' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'brand' => 'required',
            'subcategory' => 'required'


        ]);

        // if include file, uplodad

        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/itemimg'),$imageName);

        $myfile = 'backend/itemimg/'.$imageName;

        

        // Data insert 
        $item = new Item;         //Item is Model name
        $item->codeno = $request->codeno;
        $item->name = $request->name;
        $item->photo = $myfile;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;

        $item->save();


        //Redirect
        return redirect()->route('items.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        // dd($item);
         return view('backend.items.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::all();
        $subcategories = Subcategory::all();
        $item = Item::find($id);
         return view('backend.items.edit',compact('brands','subcategories','item'));
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
        // dd($request);

        //Validation

        $request->validate([
            'codeno' => 'required|min:4',
            'name' => 'required',
            'photo' => 'sometimes',
            'price' => 'required',
            'discount' => 'required',
            'brand' => 'required',
            'subcategory' => 'required'


        ]);

        //if include file, upload

        if($request->hasFile('photo'))
        {
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('backend/itemimg'),$imageName);

            $myfile = 'backend/itemimg/'.$imageName;
            //delete old photo (unlink)
            unlink($request->oldphoto);
        }
        else{
            $myfile = $request->oldphoto;
        }
        

        //data update
        $item = Item::find($id);         //
        $item->codeno = $request->codeno;
        $item->name = $request->name;
        $item->photo = $myfile;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->brand_id = $request->brand;
        $item->subcategory_id = $request->subcategory;

        $item->save();


        //redirect
         return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();
         unlink($item->photo);

        //redirect
        return redirect()->route('items.index');
    }
}
