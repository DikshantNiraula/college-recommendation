<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'course_detail',
        'price',
        'seats_available',
        'course_time_year',
        'qualification',
        'college_id',
        'image'
    ];

    public function college()
    {
        return $this->belongsTo(College::class);
    }
}
