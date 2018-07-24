<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProfessionsRelation extends Model
{
    public function profession() 
	{
		return $this->belongsToMany('App\Profession');
	}
}
