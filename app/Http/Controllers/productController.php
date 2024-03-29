<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function products(){

        $products = Product::latest()->paginate(5);
        return view('products',compact('products'));
    }

    public function addProducts(Request $request){
        $request->validate([
            'name'=> 'required|unique:products',
            'price'=> 'required',
        ],
    [
        'name.required'=> 'Name is required',
        'name.unique'=> 'product already exists',
        'price.required'=> 'Product price is required',
             ]);

    
            $product=new product();
            $product->name=$request->name;
            $product->price=$request->price;
            $product->save();
            return response()->json([
                'status'=>'success'
            ]);
    }
//update product


    public function updateProducts(Request $request){
    $request->validate([
        'up_name'=> 'required|unique:products,name,'.$request->up_id,
        'up_price'=> 'required',
    ],
        [
    'up_name.required'=> 'Name is required',
    'up_name.unique'=> 'product already exists',
    'up_price.required'=> 'product already exists',
        ]);

   Product::where('id',$request->up_id)->update([
    'name'=>$request->up_name,
    'price'=>$request->up_price,

   ]);

    return response()->json([
    'status'=>'success'
    ]);
    }
     public function deleteproduct(Request $request){
        product::find($request->product_id)->delete();
        return response()->json([
            'status'=>'success'
        ]);
 
      
  }
  //pagination
    public function pagination(Request $request){
    $products=product::latest()->paginate(5);
    return view('pagination_products',compact('products'))->render();
   
    }
    public function search(Request $request){
        $products=product::where('name','like','%'.$request->search_string.'%')
        ->orwhere('price','like','%'.$request->search_string.'%')
        ->orderBy('id','desc')->paginate(5);
        if(count($products)>= 1){
            return view('pagination_products',compact('products'))->render();
        }else{
            return response()->json([
                'status'=> 'nothing_found'
            ]);
        }



        }



}
