<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;
use App\Wod;
use App\Benchmark;
use Storage;

class WodController extends Controller
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
    public function index(Request $request, User $user)
    {
        //
        return view('user.allwods')
                ->withWods(Wod::where('user_id', $request->user()->id)->get())
                ->withUser($request->user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('user.createwod')->withUser($request->user());

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
        //$this->validate($request, [
        //  'wod_type', 'wod', 'wod_results' =>'required'
        //]);

        //Create the new wod
        $user_id = $request->user()->id;
        $strength = $request->get('strength');
        $strength_notes = $request->get('strength_notes');
        $wod_type = $request->get('wod_type');
        $wod = $request->get('wod');
        $wod_results = $request->get('wod_results');
        $wod_notes = $request->get('wod_notes');

      //  if ($request->file('board_img')) {
      //      $hashname=$request->file('board_img')->hashName();

      //      Storage::disk('s3')->put('wod-pictures/', $request->file('board_img'), 'public');

    //        $wod_img="wod-pictures/" . $hashname;
    //      }else{
    //        $wod_img=$request->get('board_img');
  //        }

        //creating the new WOD and saving it into the database from the
        //user entered values
        $daily_wod = new Wod(['user_id'=>$user_id, 'strength'=>$strength,
                              'strength_notes'=>$strength_notes,'wod_type'=>$wod_type,
                              'wod'=>$wod, 'wod_results'=>$wod_results, 'wod_notes'=>$wod_notes]);
                              //'wod_img'=>$wod_img]);
        $daily_wod->save();
        //Passes the ID of the WOd to the show function so that it can be displayed after entered
        return redirect()->action("WodController@index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user, Wod $wod)
    {
        //
        //return view('user.showuserwods');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Wod $wod)
    {
        //
        return view('user.editwod')
              ->withWod($wod)
              ->withUser($request->user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wod $wod)
    {
        //
        //if ($request->file('board_img')) {

          //$hashname=$request->file('board_img')->hashName();

          //Storage::disk('s3')->put('wod-pictures/', $request->file('board_img'), 'public');

          //$wod_img="wod-pictures/" . $hashname;

          //$request['wod_img']=$wod_img;

          //Storage::disk('s3')->delete($wod->wod_img);
        //}
        Wod::find($wod->id)->update($request->all());
        //return view('user.allwods')
        //    ->withWods(Wod::where('user_id', $request->user()->id)->get())
        //    ->withUser($request->user());
        return redirect()->action("WodController@index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wod $wod)
    {
        //
      //  Storage::disk('s3')->delete($wod->wod_img);
        Wod::find($wod->id)->delete();
        return redirect()->action("WodController@index");

    }
}
