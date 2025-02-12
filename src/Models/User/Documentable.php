<?php

namespace Fiduprevisora\CoreModels\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documentable extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'name',
        'documentable_id',
        'documentable_type',
        'mime_type',
        'type',
        'system',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getUrlAttribute($value)
    {
        return url('storage/'.ltrim($value, '/'));
    }
}
