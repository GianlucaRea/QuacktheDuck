<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{

   protected $table = "reviews";
   public $timestamps = false;
   protected $fillable = [
       'id_review_by_user',
       'id_document_reviewed',
       'stars_number',
   ];
}
