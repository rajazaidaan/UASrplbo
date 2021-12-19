<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'participant_id', 'vaccine_date'
    ];

    protected $hidden = [

    ];

    public function participants()
    {
        return $this->belongsTo(Participant::class, 'participant_id', 'id');
    }
}
