<?php

namespace Shed\Entities;

use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Mechanist extends Model
{
    use SoftDeletes, HybridRelations;

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
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'complement',
        'zipcode',
        'location',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at',
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

    protected $appends = [
        'reviews_avg',
    ];

    /**
     * Get the mechanist's user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, '_id', 'user_id')->withTrashed();
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)->orderBy('created_at', 'desc');
    }

    protected function getReviewsAvgAttribute()
    {
        return $this->reviews()
            ->get()
            ->map(function($el) {
                return (integer) $el->review;
            })
            ->avg();
    }
}
