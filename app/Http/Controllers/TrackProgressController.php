<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;
use App\Wod;
use App\Benchmark;


class TrackProgressController extends Controller
{
    //
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
        return view('user.progress')
          ->withWods(Wod::where('user_id', $request->user()->id)->get())
          ->withUser($request->user());

    }

    public function show(Request $request, User $user)
    {
      //if($request->movement="Back Squat"){
      //  $keywordRaw="Back Squat:bs:backsquat";
      //}

      //$keywords=explode(":", $keywordRaw);
      //dd($keywords);

      $movement=$request->movement;
      $whereToTrack=$request->track;

      //$progress=$user->wods()->whereRaw("MATCH (".$request->track.")
      //                    against (? in boolean mode)",[$keywords])->get();

      //$progress = Wod::where($request->track, 'LIKE', '%'.)->get();
      //dd($progress);
    //  if(!empty($keywords)){
    //       $progress=$user->wods()->whereRaw("MATCH (".$request->track.")
    //                     against (? in boolean mode)",[$keywords[0]])->get();
    //       //$progress="SELECT DB FROM `$request->track` WHERE keywords LIKE '%$keywords[0]%' ";
    //          if(count($keywords)>1){
    //          for($i=1;$i<count($keywords);$i++){
    //           $progress.=$user->wods()->whereRaw("MATCH (".$request->track.")
    //                     against (? in boolean mode)",[$keywords[$i]])->get();
    //           //$progress.="AND keywords LIKE '%$keywords[$i]%' ";
    //              }
    //         }
    //         return $progress;
      $progress=$user->wods()->where($request->track, 'LIKE', '%'.$request->movement.'%')->get();

      //dd($progress);
      return view('user.trackprogress')->withProgress($progress)
                                       ->withMovement($movement)
                                       ->withTracker($whereToTrack);

    }
}
