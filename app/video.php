<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    //

      protected $table = 'video';

     protected $fillable = ['video_title', 'video_url'];
}
