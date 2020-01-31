<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Statistic;
use Illuminate\Support\Facades\DB;
use Validator;

class StatisticController extends Controller
{

    /**
     * average_feedback_single_doc
     * average_feedback_total_doc
     * number_uploaded_doc
     * points_feedback_single_doc
     * points_feedback_total_doc
     * rank_position
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Statistic::get(),200);
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
    public function store(Request $request){ }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_user
     * @return \Illuminate\Http\Response
     */
    public function show($id_user)
    {
       // $id = DB::table('users')->select('id')->where('id' , '=' , $argc)->get();
        $statistic = Statistic::find($id_user);
        if(is_null($statistic)){
            return response()->json(["message"=>'Record not found'],404);
        }
        return response()->json(Statistic::find($id),200);
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
        $statistic = Statistic::find($id);
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
        $statistic = Statistic::find($id);
        if(is_null($statistic)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $statistic-> delete();
        return response()->json(null,204);
    }

    public function getUser($id)
    {
        $doc = Statistic::find($id)->user()->get();

        return response()->json($doc, 200);
    }

}
