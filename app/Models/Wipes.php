<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wipes extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'month',
        'p_day',
        'p_month',
        'bp_wipe',
        'rp_wipe',
        'status',
        'year'
    ];
}
