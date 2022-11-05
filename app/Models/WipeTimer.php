<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WipeTimer extends Model
{
    use HasFactory;

    protected $table = 'wipe_timer';

    protected $fillable = [
        'day',
        'month',
        'year'
    ];
}
