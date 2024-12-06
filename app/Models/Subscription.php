<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = ['user_id', 'plan_name', 'amount', 'subscription_date', 'expiry_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
