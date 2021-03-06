<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wod extends Model
{
    //Attributes that are mass assignable
    protected $fillable =['user_id', 'strength', 'strength_notes',
                          'wod_type','wod', 'wod_results', 'wod_notes', 'wod_img', 'wod_date'];

    //Defines relationship to the user class
    public function user() {
      //Wod Model belongs to user
      return $this->belongsTo(User::class);
    }
}
