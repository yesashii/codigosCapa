<?php

namespace PlatziPHP;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
