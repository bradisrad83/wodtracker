<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cmgmyr\Messenger\Traits\Messagable;



class User extends Authenticatable
{
    use Messagable;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    //Defines relationship to Wod Class
    public function wods() {
      //each user can have many wods
      return $this->hasMany(Wod::class);
    }

    public function profile() {
      //Profile Model belongs to User Model
      return $this->belongsTo(User::class);
    }

}
