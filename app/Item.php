<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'sub_categories_id', 'item_name','item_detail','unit','price', 'publication_status'
    ];
}
