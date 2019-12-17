<?php

namespace App\Http\Controllers\Lista;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ListModel;
use Validator;

class Lista extends Controller
{
    /**
     * I can't use the normal name List because it gives me error so i just put the italian equivalent.
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $listaList = ListaModel::paginate(10);
    return response()->json($listaList,200);
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

            $list = ListModel::create($request->all());
            return response()->json($list,201);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
         $list = ListModel::find($id);
         if(is_null($list)){
             return response()->json(["message"=>'Record not found'],404);
         }
         return response()->json(ListModel::find($id),200);
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
      $list = ListModel::find($id);
     if(is_null($list)){
         return response()->json(["message"=>'Record not found'],404);
     }
     $list -> update($request -> all());
     return response()->json($list,200);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
         $list = ListModel::find($id);
        if(is_null($list)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $list-> delete();
        return response()->json(null,204);
}
}


