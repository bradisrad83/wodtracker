<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;
use App\Wod;

class ProfileController extends Controller
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
        //dump($request->user());die();
        return view('user.profile')->withUser($request->user());



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('user.createprofile')->withUser($request->user());


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Creating a profile
        $user_id = $request->user()->id;
        $name = $request->get('name');
        $location = $request->get('location');
        $age = $request->get('age');
        $height = $request->get('height');
        $weight = $request->get('weight');
        $affiliate = $request->get('affiliate');
        $front_squat = $request->get('front_squat');
        $back_squat = $request->get('back_squat');
        $clean_and_jerk =$request->get('clean_and_jerk');
        $snatch = $request->get('snatch');
        $deadlift = $request->get('deadlift');
        $bio = $request->get('bio');
        $img_link = $request->get('img_link');

        //Saving all the entered values using the Profile model and Saving them
        //into our database
        $user_profile = new Profile (['user_id'=>$user_id, 'name'=>$name, 'location'=>$location,
                        'age'=>$age, 'height'=>$height, 'weight'=>$weight, 'affiliate'=>$affiliate,
                        'front_squat'=>$front_squat, 'back_squat'=>$back_squat,
                        'clean_and_jerk'=>$clean_and_jerk, 'snatch'=>$snatch, 'deadlift'=>$deadlift,
                        'bio'=>$bio, 'img_link'=>$img_link]);



        $user_profile->save();

        //Passes the ID of the Profile to the show function so that it can be displayed after entered
        return redirect()->action("ProfileController@create");


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
