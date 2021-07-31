<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Product;
use App\ProductImage;
use DB;
use Image;
use App\User;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderby('created_at', 'desc')->paginate(6);
        $users = User::orderby('created_at',)->get();
        //$products = Product::orderby('id','desc')->get();
        return view('product.index',compact('products','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
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
          'title'=>'required|max:150',
          'description'=>'required',
          'quantity'=>'required',
          'price'=>'required',
        ]);



        $products = new Product;
        $products->title = $request->title;
        $products->description = $request->description;
        $products->categoryID = 1; //$request->categoryID;
        $products->admin_id = 1;
        $products->quantity = $request->quantity;
        $products->price = $request->price;
        $products->slug =Str::slug($request->title);
        //$products->status = $request->status;
        //$products->image = $file_name;
        //$products->image = $request->image;
        $products->save();


        //Product Image

        if(count($request->product_image) > 0){
          foreach ($request->product_image as $image) {
            //insert image
            //$image = $request->file('product_image');
            $img = time().'.'. $image->getClientOriginalExtension();
            $location = public_path('img/productimage/'.$img);
            Image::make($image)->save($location);

            $Product_image = new ProductImage;
            $Product_image->product_id = $products->id;
            $Product_image->image = $img;
            $Product_image->save();
          }
        }
        return redirect('product/create')->with('success','Successfully Posted ');

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
        $product = Product::find($id);
        return view('product.edit')->with('product',$product);
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
        $request->validate([
            'title'=>'required|max:150',
            'description'=>'required',
            'quantity'=>'required',
            'price'=>'required',
          ]);
  
  
  
          $products = Product::find($id);
          $products->title = $request->title;
          $products->description = $request->description;      
          $products->quantity = $request->quantity;
          $products->price = $request->price;
          
          //$products->status = $request->status;
          //$products->image = $file_name;
          //$products->image = $request->image;
          $products->save();
  
          return redirect('product')->with('success','Successfully Updated ');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        if(!is_null($products)){
            $products->delete(); 
        }
    }
}
