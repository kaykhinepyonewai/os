<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;
use App\Brand;

class FrontendController extends Controller
{
   public function home($value='')
   {
   	$items = Item::all();
   	// dd($items);
   	return view('frontend.home',compact('items'));
   }

   public function item($value='')
   {
   	$items = Item::orderBy('id','desc')->take(6)->get();
   	// dd($items);
   	return view('frontend.item',compact('items'));
   }


   public function login($value='')
   {
   	// $items = Item::orderBy('id','desc')->take(6)->get();
   	// dd($items);
   	return view('frontend.login');
   }

   public function profile($value='')
   {
   	// $items = Item::orderBy('id','desc')->take(6)->get();
   	// dd($items);
   	return view('frontend.profile');
   }

   public function register($value='')
   {
   	// $items = Item::orderBy('id','desc')->take(6)->get();
   	// dd($items);
   	return view('frontend.register');
   }

    public function detail($id)
   {
   	
   	  	$brands = Brand::all();
        $subcategories = Subcategory::all();
   		$item = Item::find($id);
   	 // dd($item);
   		return view('frontend.detail',compact('subcategories','brands','item'));
   }

    public function checkout($value='')
   {
   	// $items = Item::orderBy('id','desc')->take(6)->get();
   	// dd($items);
   	return view('frontend.checkout');
   }
}
