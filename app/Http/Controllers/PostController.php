<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $spost= DB::table('posts')->paginate(2);
      //$spost = Post::orderby('id','desc')->get();
      return view('posts.index',compact('spost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new Post();
        $posts->title = $request->title;
        $posts->image = 'image';
        $posts->shortdescription = $request->shortdescription;
        $posts->Descriotion = $request->Descriotion;
        $posts->save();

        $lastId = $posts->id;

        $postimage = $request->file('image');
        $imgname = $lastId.$postimage->getClientOriginalName();
        $folder = "postimage/";
        $postimage->move($folder,$imgname);
        $imgurl = $folder.$imgname;
        $postimages = Post::find($lastId);
        $postimages->image = $imgurl;
        $postimages->save();
        return redirect('post/create')->with('msg','Successfully Posteed ');

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
