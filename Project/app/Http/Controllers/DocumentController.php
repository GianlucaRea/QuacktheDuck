<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DocumentModel;
use Validator;
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documentList = DocumentModel::paginate(10);
        return response()->json($documentList,200);
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
            'id_user_document'=>'required',
            'title' => 'required|min:3',
            'university' => 'required',
            'course' => 'required',
            'subject' => 'required',

        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

        $document = DocumentModel::create($request->all());
        return response()->json($document,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = DocumentModel::find($id);
        if(is_null($document)){
            return response()->json(["message"=>'Record not found'],404);
        }
        return response()->json(DocumentModel::find($id),200);
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
        $document = DocumentModel::find($id);
        if(is_null($document)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $document -> update($request -> all());
        return response()->json($document,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = DocumentModel::find($id);
        if(is_null($document)){
            return response()->json(["message"=>'Record not found'],404);
        }
        $document-> delete();
        return response()->json(null,204);
    }


    public function getDocID(){}

    public function getTitle(){}

    public function getData(){}

    public function getSource(){}

    public function getUniversity(){}

    public function getCourse(){}

    public function getSubject(){}

    public function getVersion(){}

    public function getNumberOfReporting(){}
}
