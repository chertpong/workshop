<?php

namespace App\Http\Controllers;

use App\Picture;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
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
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'file' => 'required|mimes:jpeg,png'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        //Create
        $picture = new Picture();
        $picture->picture_name = $request->get('name');
        //TODO: Change if we have more than one admin, now we have one, so no need to validate the uniqueness
        $picture->file_hashed_name = md5($request->get('name').Carbon::now().'fkRdg');
        $picture->data = base64_encode(file_get_contents($request->file('file')->getRealPath()));
        $picture->mime_type = $request->file('file')->getMimeType();
        $picture->save();

        return redirect('pictures/'.$picture->file_hashed_name);

    }

    /**
     * Display the specified resource.
     *
     * @param  String  $file_hashed_name
     * @return \Illuminate\Http\Response
     */
    public function show($file_hashed_name)
    {
        return view('pictures.show', ['picture'=>Picture::where('file_hashed_name',$file_hashed_name)->first()]);
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
