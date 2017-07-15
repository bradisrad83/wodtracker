<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benchmark extends Model
{
  //Attributes that are mass assignable
  protected $fillable =['user_id','benchmark','benchmark_results'];
    //
    public function Benchmark() {
      //Benchmark Model belongs to user
      return $this->belongsTo(User::class);
    }
}
