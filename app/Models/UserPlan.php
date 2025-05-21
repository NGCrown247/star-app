<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
use HasUuids;
  protected $fillable = ['plan_id','user_id'];




  public function user(){
    return $this->belongsTo(User::class);
  }


  public function plan(){
    return $this->belongsTo(Plan::class);
}

}
