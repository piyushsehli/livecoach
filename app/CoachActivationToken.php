<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachActivationToken extends Model
{
    protected $fillable = ['token'];


    public function getRouteKeyName()
    {
        return 'token';
    }

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }
}
