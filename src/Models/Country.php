<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $casts = [
        'translations' => 'array',
        'timezones' => 'array',
    ];

    public function states()
    {
        return $this->hasMany(State::class);
    }
}
