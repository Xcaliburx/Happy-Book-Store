<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'book_id', 'author', 'publisher', 'year', 'description'
    ];

    public function book()
    {
        return $this->belongsTo(books::class);
    }
}
