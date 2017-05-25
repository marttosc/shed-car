<?php

namespace Shed\Entities;

use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Eloquent\Model;

class City extends Model
{
    use HybridRelations;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'state',
        'city',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        '_id',
    ];

    /**
     * Get the city state.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uf()
    {
        return $this->belongsTo(State::class, 'state', 'uf');
    }
}
