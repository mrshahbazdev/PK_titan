<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RechargeRequest extends Model
{
    protected $table = 'rechargerequests';
    public $timestamps = false;

    protected $fillable = ['user_id', 'amount', 'tid', 'method', 'status', 'created_at', 'updated_at'];
}
