<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'item_id', 'name','comment', 'publication_status'
    ];
}
