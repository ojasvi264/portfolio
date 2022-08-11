<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edit = About::first();
        return view('backend.about', compact('edit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $edit = About::first();
        if ($edit){
            $edit->update($request->all());
        }else{
            About::create($request->all());
        }
        if ($request->hasFile('profile_image')){
            if ($edit->hasMedia()){
                $edit->deleteMedia($edit->getMedia()[0]);
                $edit->addMedia($request->file('profile_image'))->toMediaCollection();
            }
        if ($request->hasFile('cv')){
            if ($edit->hasMedia('pp')){
                $edit->deleteMedia($edit->getMedia('pp')[0]);
                $edit->addMedia($request->file('cv'))->toMediaCollection('pp');
            }
        }
        }
        return redirect()->route('about.index')->withMsg('About has been updated successfully');
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
