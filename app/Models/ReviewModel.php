<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
   protected $table = "reviews";
   protected $primaryKey = "id_review";
   protected $fillable = [
       'stars_number',
   ];
}
