<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationCategory extends Model
{
    use HasFactory;

    protected $fillable = [

        'name'
    ];

    // public function category()
    // {

    //    return $this->belongsTo(PublicationCategory::class, 'publication_category_id', 'id');

    // }
}
