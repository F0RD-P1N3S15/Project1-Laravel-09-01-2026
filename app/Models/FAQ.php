<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    protected $fillable = [
        'title',
        'content',
        'faq_category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, 'faq_category_id');
    }
}
