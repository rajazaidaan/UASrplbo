<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'amount', 'doses'
    ];

    protected $hidden = [

    ];

    public function participants()
    {
        return $this->hasMany(Participant::class, 'vaccine_id', 'id');
    }
}
