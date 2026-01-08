<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'title',
    ];

    public function faqs()
    {
        return $this->hasMany(Faq::class, 'faq_category_id');
    }
}
