<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';

    public function users()
    {
        return $this->hasOne('App\User');
    }
}
