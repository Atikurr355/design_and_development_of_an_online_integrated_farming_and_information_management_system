<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContriller extends Controller
{
  public function index()
  {

      return view('../multiauth.admin.category.categories');
  }
  public function product()
  {
      $products = Product::orderby('created_at', 'desc')->paginate(6);
      return view('../multiauth.admin.product.index',compact('products'));
  }
}
