<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_name', 'category_photo', 'category_detail','publication_status'
    ];
}
