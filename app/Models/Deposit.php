<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'planid',
        'uid',
        'invoice_num',
        'amount',
        'method',
        'rc_number',
        'sn_number',
        'trxid',
        'status',
    ];    
}
