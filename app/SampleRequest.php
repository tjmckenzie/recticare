<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SampleRequest extends Model
{
    protected $fillable = [
    	'name',
    	'title',
    	'npi',
    	'state_license_number',
    	'phone',
    	'fax',
    	'practice_name',
    	'address',
    	'city',
    	'state',
    	'zipcode',
    	'subject',
    	'message',
    	'reference',
    	'reference_other',
    	'ip_address',
    ];
}
