<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;
use App\Wod;

class wodController extends Controller
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
        return view('user.createwod')->withUser($request->user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        //Laravel validation (wod_type/wod/wod_results are required)
        $this->validate($request, [
          'wod_type', 'wod', 'wod_results' =>'required'
        ]);

        //Create the new wod
        $user_id = $request->user()->id;
        $strength = $request->get('strength');
        $strength_results = $request->get('strength_results');
        $strength_notes = $request->get('strength_notes');
        $wod_type = $request->get('wod_type');
        $wod = $request->get('wod');
        $wod_results = $request->get('wod_results');
        $wod_notes = $request->get('wod_notes');

        //creating the new WOD and saving it into the database from the
        //user entered values
        $daily_wod = new Wod(['user_id'=>$user_id, 'strength'=>$strength,
                              'strength_results'=>$strength_results, 'strength_notes'=>$strength_notes,
                              'wod_type'=>$wod_type, 'wod'=>$wod, 'wod_results'=>$wod_results,
                              'wod_notes'=>$wod_notes]);
        $daily_wod->save();
        //Passes the ID of the WOd to the show function so that it can be displayed after entered
        return redirect()->action("WodController@show", $daily_wod->id);

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
        return view('user.showwod')->withWod(Wod::find($id));
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
