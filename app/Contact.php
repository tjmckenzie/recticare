<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable = [
    	'name',
    	'phone',
    	'email',
    	'subject',
    	'message',
    	'promotions',
    	'ip_address',
    ];

    protected $casts = ['promotions' => 'boolean'];
}
