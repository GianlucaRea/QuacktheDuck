<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentModel;
use Validator;

class Content extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentList = ContentModel::paginate(10);
        return response()->json($contentList,200);
        //return response()->download(public_path('duckbath.jpg'),user image
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
    public function store(Request $request)
    {

        $rules = [
            'type' => 'required',
            'file' => 'required',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        $country = ContentModel::create($request->all());
        return response()->json($country,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = ContentModel::find($id);
        if(is_null($content)){
            return response()->json(["message"=>'Record not found'],404);
        }
        return response()->json(ContentModel::find($id),200);
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
        $content = ContentModel::find($id);
        if(is_null($content)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $content -> update($request -> all());
        return response()->json($content,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = ContentModel::find($id);
        if(is_null($content)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $content-> delete();
        return response()->json(null,204);
    }
}
