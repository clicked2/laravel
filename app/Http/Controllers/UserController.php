<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\User as UserModel;
use DB;
 

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return '1';
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$user = new UserModel;
        //$user->name = 'clicked';
        //$user->pass = 'clicked';
        //$user->create_time = date("Y-m-d");
        //$result = $user->save();
        

        //select
       //$result = UserModel::find(1);
        //$result = UserModel::all();
        
        //update
        //$result = UserModel::find(1);
        //$result->name = 'clicked1';
        //$result->save();
        
        //delete
        $result = UserModel::find(1);
        $result->delete();

        //dd($result->toArray());
        //return $list;

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
