<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use App\Wod;
use App\Benchmark;

use Illuminate\Http\Request;

class BenchmarkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        return view('user.benchmarks')
                ->withBenchmarks(Benchmark::where('user_id', $request->user()->id)->get())
                ->withUser($request->user());
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
        //makes all fields required
        $this->validate($request, [
          'benchmark', 'benchmark_results' =>'required'
        ]);

        //making new Benchmark models
        $user_id = $request->user()->id;
        $benchmark = $request->get('benchmark');
        $benchmark_results = $request->get('benchmark_results');

        $new_benchmark = New Benchmark(['user_id'=>$user_id,
          'benchmark'=>$benchmark, 'benchmark_results'=>$benchmark_results
        ]);
        $new_benchmark->save();

        return redirect()->action("BenchmarkController@index");


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
        Benchmark::find($id)->delete();
        return redirect()->action("BenchmarkController@index");
    }
}