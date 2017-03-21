<?php

namespace Shed\Entities;

use Illuminate\Database\Eloquent\Model;

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
            'telephone'
        ];
}
