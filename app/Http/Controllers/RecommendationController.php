<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recommendation;

class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recommendation.index');
    }

    public function list()
    {
        $recommendations= Recommendation::all();
        return view('recommendation.list', compact('recommendations'));
    }


    public function list_usage_category($category,$usage)
    {
        $recommendations= Recommendation::where('category', $category)->where('usage', $usage)->get();
        // dd($recommendations);
        return view('recommendation.list', compact('recommendations'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recommendation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'description' => 'required|string|max:255',
        //     'specification' => 'required|string|max:255',
        //     'image' => 'mimes:png,jpg,jpeg,pdf|max:2048',
        //     'category' =>'required',
        //     'usage' =>'required',
        // ]);

        $recommendation = Recommendation::create([
            'user_id' => 0,
            'description' => $request->description,
            'specification' => $request->specification,
            'image' => $request->image,
            'category' => $request->category,
            'usage' => $request->usage,
        ]);

        return redirect()->route('recommendation.show', ['recommendation' => $recommendation]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recommendation= Recommendation::find($id);
        return view('recommendation.show',compact('recommendation'));

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
