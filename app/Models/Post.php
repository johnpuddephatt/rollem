<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\MyFlexibleCast;

class Post extends Model
{
    use HasFactory;

    public static $imageSizes = [
        "image" => [1680, 1050],
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "author_id",
        "title",
        "slug",
        "introduction",
        "content",
        "published_at",
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
        "author_id" => "integer",
        "published_at" => "timestamp",
        "content" => MyFlexibleCast::class,
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function getUrlAttribute()
    {
        return route("post.show", ["post" => $this->slug]);
    }
}
