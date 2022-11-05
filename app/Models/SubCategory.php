<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category_id',
        'date',
        'name',
        'img',
        'notes',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
