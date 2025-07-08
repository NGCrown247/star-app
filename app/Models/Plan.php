<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
protected $fillable=[
  'image',
  'plan_title',
  'plan_price',
  'plan_earn_daily',
  'Benefit_header',
  'watch_video',
  'play_music',
  'read_article',
  
  'task_point',
  'plan_tier',
  'created_by'
];


public function creator(){
    return $this->belongsTo(User::class,'created_by');
}

}
