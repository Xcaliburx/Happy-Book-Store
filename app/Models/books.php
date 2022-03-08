<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'category_id', 'title'
    ];

    public function category()
    {
        return $this->belongsTo(categories::class);
    }
}
