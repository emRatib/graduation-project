<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientData extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable =[
        'user_id','gender','age','hypertension','heart_disease','smoking_history','bmi','HbA1c_level','blood_glucose_level'
    ];

}
