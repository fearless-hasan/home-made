<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sub_categories_id', 'item_name','item_detail','unit','price', 'image', 'publication_status'
    ];
}
