<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'p_id',
        'u_id',
        'mass',
        'c_status',
        'c_id'
    ];
}
