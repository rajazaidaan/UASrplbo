<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nik', 'fullname', 'sex', 'date_of_birth', 'phone_number', 'address', 'email', 'vaccine_id', 'vaccine_doses'
    ];

    protected $hidden = [

    ];

    public function vaccines()
    {
        return $this->belongsTo(Vaccine::class, 'vaccine_id', 'id');
    }

    public function schedules()
    {
        return $this->hasOne(Schedule::class, 'participant_id', 'id');
    }
}
