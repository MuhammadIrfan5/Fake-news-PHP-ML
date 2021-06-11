<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\News;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('dashboard.news.show',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//    	var_dump($request->all());
//    	die();
        $this->validate($request, [
            'title' => 'required',
            'source'  => 'required',
            'description'  => 'required',
            //'news_image' => 'required',
        ]);
        $data = $request->only( [
                                    'title',
                                    'source',
                                    'description',
                                    'news_image',
                                ] );
        $new_path = "";
        $imageName = "";
        $size = "";
//    if ( $file   =   $request->hasFile('file') ) {
//    	var_dump("here");
//	    $fileName        = $data['news_image']->getClientOriginalName();
//	    $new_path = "userdirectory/user_" .auth()->user()->id . "/news/".$fileName;
//	    $get_size        = $request->file('news_image')->getSize();
//        $path      = $request->file( 'news_image' )->storeAs( 'public/userdirectory/user_'.auth()->user()->id . '/news', $imageName );
//        $new_path = 'userdirectory/user_' . rand(1,100) . '/news/'.$imageName;
//	    var_dump($get_size);
//            }
//    die();
         $news = new News();
         $news->title = $data['title'];
         $news->source =  $data['source'];
         $news->description  = $data['description'];
         $news->news_image =  "0";
	     $news->image_size =  "0";
	     $news->image_name = "0";
	     $news->save();

        //$noti = array("message" => "Task Add Successfully!", "alert-type" => "success");
        return redirect()->back();
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
        $news = News::find($id);
        return view('dashboard.news.edit',compact('news'));
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
	    $news = News::find($id);
	    $this->validate($request, [
		    'title' => 'required',
		    'source'  => 'required',
		    'description'  => 'required',
	    ]);
	    $data = $request->only( [
		                            'title',
		                            'source',
		                            'description',
	                            ] );

	    $news->title        = $data['title'];
	    $news->source       = $data['source'];
	    $news->description  = $data['description'];
	    $news->news_image   =  "0";
	    $news->image_size   =  "0";
	    $news->image_name   =  "0";
	    $news->save();
	    return redirect()->back();
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
