<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function topic()
    {
        return $this->hasOne('App\Topic');
    }
}
