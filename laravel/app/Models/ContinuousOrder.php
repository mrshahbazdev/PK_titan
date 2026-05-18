<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContinuousOrder extends Model
{
    protected $table = 'continuousorders';
    public $timestamps = false;

    protected $fillable = ['userId', 'continuous', 'amount', 'status'];
}
