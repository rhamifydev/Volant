<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'company',
        'message',
        'ip_address',
        'user_agent',
    ];
}
