<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'user_id',
        'title', 
        'first_name',
        'last_name',
        'address',
        'city',
        'postal_code',
        'additional_info',
        'phone_number',
    ];
}
