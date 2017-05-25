<?php

namespace Shed\Entities;

use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Eloquent\Model;

class State extends Model
{
    use HybridRelations;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'uf';

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
        'uf',
        'state',
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
     * Get the state cities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class, 'state', 'uf');
    }
}
