<?php

namespace Fiduprevisora\CoreModels\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleApp extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'identifier',
        'icon',
    ];
}
