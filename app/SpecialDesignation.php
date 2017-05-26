<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialDesignation extends Model
{
    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}