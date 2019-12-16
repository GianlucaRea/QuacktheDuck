<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TagModel;
use Validator;

class Tag extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(TagModel::get(),200);

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
        $validator = Validator::make($request->all());
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        $tag = TagModel::create($request->all());
        return response()->json($tag,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = TagModel::find($id);
        if(is_null($tag)){
            return response()->json(["message"=>'Record not found'],404);
        }
        return response()->json(TagModel::find($id),200);
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
        $tag = TagModel::find($id);
        if(is_null($tag)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $tag -> update($request -> all());
        return response()->json($tag,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = TagModel::find($id);
        if(is_null($tag)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $tag-> delete();
        return response()->json(null,204);
    }
}
