<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $primaryKey = 'slug';
    protected $keyType = 'char';
    public $incrementing = false;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'public',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public static function card() 
    {
        $posts = Post::select('title', 'slug', 'content', 'created_at')
            ->where('public', true)
            ->orderBy('created_at', 'desc')
            ->get()
            ->map(function ($post) {
                return [
                    'title' => $post->title,
                    'slug' => $post->slug,
                    // Format date as "DD-Month-Year"
                    'created_at' => $post->created_at->format('F d, Y'),
                    // Truncate content to 100 chars and add ...
                    'excerpt' => Str::limit($post->content, 100, '...'),
                    'tags' => $post->tags
                ];
            });
        return $posts;
    }
}
