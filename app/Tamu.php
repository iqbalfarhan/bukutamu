<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
	protected $fillable = [
		'name',
		'phone',
		'meet_who',
		'purpose',
		'photo',
	];
}
