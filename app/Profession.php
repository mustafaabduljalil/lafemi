<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profession extends Model
{
    public function children()
    {
        return $this->hasMany('App\ProfessionsRelation');
    }
}
