<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
	use SoftDeletes;

    protected $fillable = ['user_id', 'name', 'slug', 'cover', 'description', 'content'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
