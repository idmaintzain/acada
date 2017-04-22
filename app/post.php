<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    public $table = 'video';

	public $fillable = ['video_title','video_url'];
}
