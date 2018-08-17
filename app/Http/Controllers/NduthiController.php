<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Nduthi;
use Image;
use Storage;


class NduthiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nduthi= Nduthi::all();

        return view('manage.suzuki.index')->withNduthi($nduthi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('manage.suzuki.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'=>'required|max:20',
            'model'=>'required|max:255',
            'price'=>'required|max:30',
            'charges'=>'required',
            'slug'=>'required|alpha_dash|min:5|max:255|unique:nduthis,slug',
             'featured_image'=>'sometimes|image'



        ));

        $nduthi = new Nduthi;

        $nduthi->name = $request->name;
        $nduthi->model= $request->model;
        $nduthi->price = $request->price;
        $nduthi->charges= $request->charges;
       $nduthi->slug= $request->slug;

         if ($request->hasFile('featured_image')){
            $image= $request->file('featured_image');
            $filename = time() . '.'.$image->getClientOriginalExtension();
            $location =public_path('image/'. $filename);  //storage_path('/app/posts/')
            Image::make($image)->resize(500,300)->save($location);

            $nduthi->image=$filename;
        }

        $nduthi->save();

        Session::flash('success', 'The Bike was successfully saved');
        return redirect()->route('suzuki.show', $nduthi->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nduthi = Nduthi::find($id);
        return view('manage.suzuki.show')->withNduthi($nduthi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nduthi=Nduthi::find($id);
       

        return view('manage.suzuki.edit')->withNduthi($nduthi);
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
        $this->validate($request, array(
            'name'=>'required|max:20',
            'model'=>'required|max:255',
            'price'=>'required|max:30',
            'charges'=>'required',
            'slug'=>"required|alpha_dash|min:5|max:255|unique:nduthis,slug,$id",
            'featured_image'=>'image'
        ));

        $nduthi = Nduthi::find($id);
            
            $nduthi->name = $request->input('name');
            $nduthi->model= $request->input('model');
            $nduthi->price= $request->input('price');
            $nduthi->charges = $request->input('charges');
            $nduthi->slug = $request->input('slug');
            


            if($request->hasFile('featured_image')){
                //add new photo
            $image= $request->file('featured_image');
            $filename = time() . '.'.$image->getClientOriginalExtension();
            $location =public_path('image/'. $filename);  //storage_path('/app/posts/')
            Image::make($image)->resize(600,400)->save($location);
            $oldFilename=$nduthi->image;

            //update the database
            $image->image= $filename;

            //Delete the old photo
            Storage::delete($oldFilename);
            }

            $nduthi->save();

            Session::flash('success', 'This Bike was successively saved !');

            return redirect()->route('suzuki.show', $nduthi->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nduthi=Nduthi::find($id);
        

        $nduthi->delete();
        
        Session::flash('success', 'The Bike was successfully Deleted');
        return redirect()->route('suzuki.index');
    }
}
