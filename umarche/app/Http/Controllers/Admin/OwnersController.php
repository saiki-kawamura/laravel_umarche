<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        // $data_now = Carbon::now();
        // $data_parse = Carbon::parse(now());
        // echo $data_now->year;
        // echo $data_parse;

        // $e_all = Owner::all();
        // $q_get = DB::table('owners')->select('name','created_at')->get();
        // $q_first =DB::table('owners')->select('name')->first();

        // $c_test = collect([
        //     'name' => 'テスト'
        // ]);

        // dd($e_all,$q_get,$q_first,$c_test);
        $owners = Owner::select('name','email','created_at')->get();
        return view('admin.owners.index',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owners.create');
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
