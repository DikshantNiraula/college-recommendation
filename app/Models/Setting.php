<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'phone_1',
        'phone_2',
        'address_1',
        'address_2',
        'email_1',
        'email_2',
        'logo',
        'company_name',
        'facebook_link',
        'linkedin_link',
        'twitter_link',
        'office_hour'
    ];
}
