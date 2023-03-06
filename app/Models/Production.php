<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\MyFlexibleCast;

class Production extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "title",
        "slug",
        "introduction",
        "content",
        "published_at",
        "image",
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
        "published_at" => "timestamp",
        "content" => MyFlexibleCast::class,
        "image" => \App\Casts\NovaMediaLibraryCast::class,
    ];

    public function getUrlAttribute()
    {
        return route("production.show", ["production" => $this->slug]);
    }

    public function subProductions()
    {
        return $this->hasMany(\App\Models\SubProduction::class);
    }
}
