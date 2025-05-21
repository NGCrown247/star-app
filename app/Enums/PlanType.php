<?php

namespace App\Enums;

class PlanType
{
    const TIER_ONE=1;
    const TIER_TWO=2;
    const TIER_THREE= 3;



    public static function getValues()   {
      return [
        self::TIER_ONE ,
        self::TIER_TWO ,
        self::TIER_THREE,
      ];
    }
}
