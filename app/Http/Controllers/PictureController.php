<?php

namespace App\Http\Controllers;

use App\Picture;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO: Change if we have more than one admin, now we have one, so no need to validate the uniqueness
        $validator = Validator::make($request->all(),[
            'file' => 'required|image|mimes:jpeg,png'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $pictureHashedName = md5($request->get('name').Carbon::now().env('PICTURE_HASH_KEY'));
        $extensionType = $request->file('file')->getClientOriginalExtension();
        //Move to pictures pool
        Storage::put($pictureHashedName.'.'.$extensionType,file_get_contents($request->file('file')->getRealPath()));

        //Save information of picture in database
        $picture = new Picture();
        $picture->name = $request->get('name',$request->file('file')->getClientOriginalName());
        $picture->file_hashed_name = $pictureHashedName;
        $picture->extension_type = $extensionType;
        $picture->save();

        return $picture->id;
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