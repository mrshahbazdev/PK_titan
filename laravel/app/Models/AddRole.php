<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddRole extends Model
{
    protected $table = 'addrole';
    public $timestamps = false;

    protected $fillable = [
        'roleName', 'memberManagement', 'systemManagement',
        'transactionManagement', 'shoppingMallManagement'
    ];
}
