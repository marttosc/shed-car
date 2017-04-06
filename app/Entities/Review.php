<?php

namespace Shed\Entities;

use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model;


class Review extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
	    'user_id',
	    'mechanist_id',
	    'review',
	    'note'
    ];

}
