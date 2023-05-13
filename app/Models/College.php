<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
        'college_name', 'description', 'longitude', 'latitude', 'image'
    ];
    
    public function courses()
    {
        return $this->hasMany(CollegeCourse::class);
    }
}
