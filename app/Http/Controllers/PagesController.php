<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shortpost;
use App\Product;
use App\Post;
use DB;
class PagesController extends Controller
{
    public function app(){
        return view('layout.app');
    }
    public function index(){
      $posts = Shortpost::orderby('id')->get();
      $products = Product::orderby('id','desc')->paginate(6);
      $spost= Post::orderby('id')->paginate(2);
      return view('pages.index',compact('posts','products','spost'));
    }
    public function fulldescription()
    {
      $spost= Post::orderby('id')->get();
        return view('posts.fulldescription',compact('spost'));

    }
    public function paymentinfo()
    {
        return view('pages.paymentinfo');

    }
    public function question()
    {
        return view('pages.question');

    }
    public function grash()
    {
        return view('pages.grash.grash');

    }
    public function buy()
    {
        $products = Product::orderby('id','desc')->paginate(6);
        return view('pages.buy',compact('products'));

    }

}
