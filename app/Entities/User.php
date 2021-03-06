<?php

namespace Shed\Entities;

use Illuminate\Notifications\Notifiable;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
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
     * Get the user's mechanists which it owns.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mechanists()
    {
        return $this->hasMany(Mechanist::class, 'user_id', 'id')->where('is_owner', true);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id', 'id')->orderBy('created_at', 'desc');
    }
}
