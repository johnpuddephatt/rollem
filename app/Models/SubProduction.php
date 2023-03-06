<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProduction extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        "introduction",
        "content",
        "published_at",
        "image",
        "production_id",
    ];

    protected $casts = [
        "content" => \App\Casts\MyFlexibleCast::class,
        "image" => \App\Casts\NovaMediaLibraryCast::class,
    ];

    public function production()
    {
        return $this->belongsTo(\App\Models\Production::class);
    }
}
