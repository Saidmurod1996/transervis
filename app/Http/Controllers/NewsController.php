<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Image;
use Session;
use Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(10);
        return view('news.index')->withNews($news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'featured_image' => 'sometimes|image']);

        $news = new News;

        $news->title = $request->title;

        $slug = str_slug($request->title);
        if(($count = News::whereRaw("slug RLIKE '^{$slug}[0-9]*$'")->count())>0){
            $slug = $slug . $count;
        }
        
        $news->slug=$slug;
        $news->body = $request->body;

        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $fileName);

            Image::make($image)->resize(300, 200)->save($location);
            $news->image = $fileName;
        }

        $news->save();

        Session::flash('success', 'The news was successfully created');

        return redirect()->route('news.show', $news->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        return view('news.show')->withNews($news);
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
        return view('news.edit')->withNews($news);
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
        $news =News::find($id);

            $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
            'featured_image' => 'image'
            ]);
 

        $news->title = $request->input('title');
        
        $slug = str_slug($request->title);
        if(($count = News::whereRaw("slug RLIKE '^{$slug}[0-9]*$'")->count())>0){
            $slug = $slug . $count;
        }
        $news->slug=$slug;
        $news->body = $request->input('body');

        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $fileName);

            Image::make($image)->resize(300, 200)->save($location);
            $oldFileName = $news->image;

            $news->image = $fileName;
            Storage::delete($oldFileName);
        }


        $news->save();

        Session::flash('success', 'The news was successfully updated');

        return redirect()->route('news.show', $news->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);

        Storage::delete($news->image);
        $news->delete();

        Session::flash('success', 'This news was successfully deleted');

        return redirect()->route('news.index');

    }
}
