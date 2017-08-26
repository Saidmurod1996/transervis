<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stuff;
use Image;
use Session;
use Storage;

class StuffController extends Controller
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
        $stuffs = Stuff::orderBy('id', 'desc')->paginate(10);
        return view('stuff.index')->withStuffs($stuffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stuff.create');
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
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'job_title' => 'required',
            'featured_image' => 'image']);

        $stuff = new Stuff;

        $stuff->firstName = $request->firstName;
        $stuff->lastName = $request->lastName;
        $stuff->job_title = $request->job_title;

        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $fileName);

            Image::make($image)->resize(250, 330)->save($location);
            $stuff->image = $fileName;
        }

        $stuff->save();

        Session::flash('success', 'The stuff was successfully created');

        return redirect()->route('stuff.show', $stuff->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stuff = Stuff::find($id);
        return view('stuff.show')->withStuff($stuff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stuff = Stuff::find($id);
        return view('stuff.edit')->withStuff($stuff);
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
         $stuff =Stuff::find($id);

            $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName' => "required|max:255",
            'job_title' => 'required',
            'featured_image' => 'image'
            ]);
 

        $stuff->firstName = $request->input('firstName');
        $stuff->lastName = $request->input('lastName');
        $stuff->job_title = $request->input('job_title');

        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $fileName);

            Image::make($image)->resize(250, 330)->save($location);
            $oldFileName = $stuff->image;

            $stuff->image = $fileName;
            Storage::delete($oldFileName);
        }


        $stuff->save();

        Session::flash('success', 'The stuff was successfully updated');

        return redirect()->route('stuff.show', $stuff->id);

    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stuff = Stuff::find($id);

        Storage::delete($stuff->image);
        $stuff->delete();

        Session::flash('success', 'This stuff was successfully deleted');

        return redirect()->route('stuff.index');
    }
}
