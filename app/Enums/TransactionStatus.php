<?php

namespace App\Enums;

class TransactionStatus
{
  const PENDING = "pending";
  const SUCCESS = "success";
  const FAILED = "failed";
  const REFUNDED = "refunded";
  const CANCELLED = "cancelled";




  public static function getValues()
  {
    return [
      self::PENDING,
      self::SUCCESS,
      self::FAILED,
      self::REFUNDED,
      self::CANCELLED,
    ];
  }
}
