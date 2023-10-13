<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['name'];

    public function fields()
    {
        return $this->hasMany(FormField::class)->orderBy('position');
    }
}
