<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sub_category_name', 'sub_category_photo','sub_category_detail', 'publication_status'
    ];
}
