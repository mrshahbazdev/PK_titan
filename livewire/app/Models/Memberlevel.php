<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberlevel extends Model
{
    use HasFactory;
    protected $fillable = [
    	'name',
    	'commissionRate',
    	'orderReciveLimit',
    	'level',
		'ordersGrabbed',
		'minimumBalanceLimit',
    ];
}
