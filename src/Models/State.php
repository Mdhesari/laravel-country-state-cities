<?php

namespace Mdhesari\LaravelCountryStateCities\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
