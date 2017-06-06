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
        'note',
    ];

    protected $casts = [
        'review' => 'integer',
    ];

    /**
     * Get the review's user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, '_id', 'user_id');
    }

    /**
     * Get the review's mechanist.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mechanist()
    {
        return $this->hasOne(Mechanist::class, '_id', 'mechanist_id');
    }
}
