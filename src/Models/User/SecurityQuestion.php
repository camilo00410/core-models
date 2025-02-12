<?php

namespace Fiduprevisora\CoreModels\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecurityQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['question'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
