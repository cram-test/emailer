<?php

namespace Emailer;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * @package App
 * @mixin \Eloquent
 */
class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('Emailer\User')
            ->withTimestamps();
    }
}
