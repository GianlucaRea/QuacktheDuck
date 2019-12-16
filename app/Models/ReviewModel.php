<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
   protected $table = "reviews";
   protected $fillable = [
       'stars_number',
   ];
}
