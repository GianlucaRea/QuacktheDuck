<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Http\Controllers\Controller;
use App\Models\AdminModel;
use Illuminate\Http\Request;

class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminList = AdminModel::paginate(10);
        return response()->json($adminList,200);
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
            'name' => 'required|min:2',
            'surname' => 'required|min:2',
            'email' => 'required',
            'password' => 'required|min:8',
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        $country = AdminModel::create($request->all());
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
        $admin = AdminModel::find($id);
        if(is_null($admin)){
            return response()->json(["message"=>'Record not found'],404);
        }
        return response()->json(AdminModel::find($id),200);
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
        $admin = AdminModel::find($id);
        if(is_null($admin)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $admin -> update($request -> all());
        return response()->json($admin,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = AdminModel::find($id);
        if(is_null($admin)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $admin-> delete();
        return response()->json(null,204);
    }
}
