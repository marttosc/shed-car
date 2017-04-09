<?php

namespace Shed\Entities;

use Jenssegers\Mongodb\Eloquent\Model;

class Mechanist extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'is_owner',
        'name',
        'address',
        'number',
        'complement',
        'zipcode',
        'city',
        'state',
        'location',
        'telephone',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_owner' => 'bool',
        'location' => 'array',
    ];
}
