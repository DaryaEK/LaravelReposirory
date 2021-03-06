<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) => $query
                ->where('header', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%'));

                $query->when(
                    $filters['category'] ?? false, fn($query, $category) => $query
                    ->whereHas('category', fn($query) => $query->where('slug', $category)
                ));
                $query->when($filters['user'] ?? false, fn($query, $user) => $query
                ->whereHas('user', fn($query) => $query->where('name', $user)
                ));
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

public function category()
{
    return $this->belongsTo(Category::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}



}