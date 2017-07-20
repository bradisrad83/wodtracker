<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;
use App\Wod;
use App\Benchmark;
use Storage;

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
        return view('user.profile')
               ->withProfile(Profile::where('user_id', $request->user()->id)->first())
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

        $hashname = $request->file('profile_img')->hashName();

        Storage::disk('s3')->put('profile-pictures/', $request->file('profile_img'), 'public');

        $img_link = "profile-pictures/" . $hashname;

        //Saving all the entered values using the Profile model and Saving them
        //into our database
        $user_profile = new Profile (['user_id'=>$user_id, 'name'=>$name, 'location'=>$location,
                        'age'=>$age, 'height'=>$height, 'weight'=>$weight, 'affiliate'=>$affiliate,
                        'front_squat'=>$front_squat, 'back_squat'=>$back_squat,
                        'clean_and_jerk'=>$clean_and_jerk, 'snatch'=>$snatch, 'deadlift'=>$deadlift,
                        'bio'=>$bio, 'img_link'=>$img_link]);



        $user_profile->save();

        //Passes the ID of the Profile to the show function so that it can be displayed after entered
        return redirect()->action("ProfileController@index");


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
    public function edit(Request $request, Profile $profile)
    {
        //
        return view('user.editprofile')
          ->withProfile($profile)
          ->withUser($request->user());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {

      if ($request->file('profile_img')) {

        $hashname = $request->file('profile_img')->hashName();

        Storage::disk('s3')->put('profile-pictures/', $request->file('profile_img'), 'public');

        $img_link = "profile-pictures/" . $hashname;

        $request['img_link'] = $img_link;

        Storage::disk('s3')->delete($profile->img_link);
      }

        $profile->update($request->all());
        
        return redirect()->action("ProfileController@index");

        //return view('user.profile')
        //    ->withProfile(Profile::where('user_id', $request->user()->id)->first())
        //    ->withUser($request->user());


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
