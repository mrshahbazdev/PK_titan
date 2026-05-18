<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SystemUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'systemusers';

    protected $fillable = [
        'username', 'password', 'role',
    ];
}
