<?php

namespace Fiduprevisora\CoreModels\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'department_id',
        'code',
        'name'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'status_id' => 'integer',
    ];
}
