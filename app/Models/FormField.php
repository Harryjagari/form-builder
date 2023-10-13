<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    protected $table = 'form_fields';
    protected $fillable = ['type', 'label', 'options', 'position'];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
