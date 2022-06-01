<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Troubleshooting;

class TroubleshootingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('troubleshooting.index');
    }

    public function list()
    {
        $troubleshooting= Troubleshooting::all();
        return view('troubleshooting.list', compact('troubleshooting'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('troubleshooting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $troubleshooting = Troubleshooting::create([
            'user_id' => 0,
            'problem_title' => $request->problem_title,
            'problem_content'=>$request->problem_content,
            'solutions'=>$request->solutions,
            'video_url'=>$request->video_url,
        ]);

        return redirect()->route('troubleshooting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $troubleshooting= Troubleshooting::find($id);
        return view('troubleshooting.show',compact('troubleshooting'));
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
