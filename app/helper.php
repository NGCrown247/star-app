<?php

use App\Enums\PlanType;
use App\Models\Plan;
use App\Models\User;
use App\Models\UserPlan;
use Illuminate\Support\Facades\Auth;

if(!function_exists('currentUser')){
  function currentUser(){
        return Auth::user()->id;
  }
}


if(!function_exists('generateAccessCode')){
    function generateAccessCode($length =10){
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomSting = '';
        for($i=0;$i<$length;$i++){
            $randomSting .= $characters[rand(0,strlen($characters)-1)];
        }
        return $randomSting;
    }


    if(!function_exists('allPlans')){
      function allPlans(){

          return Plan::whereNotIn('plan_tier',[PlanType::TIER_ONE])->get();
      }
    }


    if(!function_exists('myPlan')){
      function myPlan(){

          return UserPlan::with('plan')->where('user_id', Auth::id())->first();

      }
    }

}

