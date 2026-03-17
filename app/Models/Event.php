<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'description',
        'skp_weight',
        'cost',
        'type',
        'registration_link',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
