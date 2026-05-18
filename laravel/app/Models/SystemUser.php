<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemUser extends Model
{
    protected $table = 'systemuser';
    public $timestamps = false;

    protected $fillable = [
        'userName', 'password', 'roleName', 'memberManagement', 'systemManagement',
        'transactionManagement', 'shoppingMallManagement', 'status'
    ];
}
