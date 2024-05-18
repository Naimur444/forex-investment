<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $fillable = [
        'trade_category',
        'investment',
        'duration',
        'total_profit',
        'monthly_profit',
        'weekly_profit',
        'deposit_bonus',
        'refer_bonus',
    ];
}
