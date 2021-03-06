<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_id', 'sub_category_name', 'sub_category_photo','sub_category_detail', 'publication_status'
    ];
}
