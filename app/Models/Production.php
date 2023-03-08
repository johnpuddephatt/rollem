<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Casts\MyFlexibleCast;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Illuminate\Database\Eloquent\Builder;

class Production extends Model implements Sortable
{
    use SortableTrait;

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

    public $sortable = [
        "order_column_name" => "sort_order",
        "sort_when_creating" => true,
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope("order", function (Builder $builder) {
            $builder->orderBy("sort_order", "asc");
        });
    }

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
