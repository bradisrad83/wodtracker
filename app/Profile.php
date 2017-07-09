<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //Attributes that are mass assignable
    protected $fillable =['user_id', 'name', 'location', 'age', 'height', 'weight',
                          'affiliate', 'front_squat', 'back_squat', 'clean_and_jerk',
                          'snatch', 'deadlift', 'bio','img_link'];
    //defines relationship to user class
    public function profile() {
      //Profile Model belongs to User Model
      return $this->belongsTo(User::class);
    }

}
