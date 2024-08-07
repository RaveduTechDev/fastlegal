<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;


class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'thumbnail',
        'user_id',
        'category_id',
        'status',
        'published_at',
        'created_at',
        'updated_at',
    ];


    protected $with = ['user', 'category'];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeStatus($query)
    {
        return $query->where('status', 'publish');
    }

    public function scopeSlug($query)
    {
        return $query->where('slug', $this->slug);
    }

    public function contentDescription()
    {
        $url = htmlspecialchars("/artikel/detail/" . $this->slug);
        $href = "<a class='hover:text-danger-300 hover:underline' href='{$url}'>[...]</a>";
        return Str::words($this->description, 18, $href);
    }
}
