<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
    public $timestamps = false;
    protected $table = "lists";
    protected $fillable = [
        'id_list_of_user',
        'id_list_document',
        'notification',
        'bookmark',
    ];
}
