<?php

namespace App\Http\Controllers\Statistic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatisticModel;
use Validator;

class Statistic extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(StatisticModel::get(),200);
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

        $statistic = StatisticModel::create($request->all());
        return response()->json($statistic,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $statistic = StatisticModel::find($id);
        if(is_null($statistic)){
            return response()->json(["message"=>'Record not found'],404);
        }
        return response()->json(StatisticModel::find($id),200);
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
        $statistic = StatisticModel::find($id);
        if(is_null($statistic)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $statistic -> update($request -> all());
        return response()->json($statistic,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statistic = StatisticModel::find($id);
        if(is_null($statistic)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $statistic-> delete();
        return response()->json(null,204);
    }
}
