<?php

namespace App\Models;

use App\Enums\TransactionStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'plan_id',
        'status',
        'user_id',
        'transaction_data',
        'refunded_by',
        'refunded_at',
    ];

    protected $casts = [
        'status' => 'string',
        'transaction_data' => 'array',
    ];

    /**
     * Relationships (example)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
