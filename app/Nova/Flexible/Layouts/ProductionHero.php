<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Http\Requests\NovaRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Nova\Actions\SaveAndResizeImage;

class ProductionHero extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "production-hero";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Hero";

    /**
     * Enable preview for this layout
     *
     * @var string
     */
    protected $preview = true;

    public static $imageSizes = [
        "image" => [1680, 1050],
    ];

    public function getResponsiveImageAttribute($value)
    {
        return Media::firstWhere("file_name", $this->image)?->img("", [
            "id" => "hero-image",
            "class" => "fixed inset-0 h-full w-full object-cover",
        ]);
    }

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Textarea::make("Title")
                ->rows(2)
                ->maxlength(30)
                ->enforceMaxlength(),
            Image::make("Image")
                ->disk("public")
                ->preview(function ($value, $disk) {
                    return $value ? Storage::disk($disk)->url($value) : null;
                })
                ->store(new SaveAndResizeImage()),
            // $request
            //     ->findModel($request->resourceId)
            //     ->addMediaFromDisk($filename, "public")
            //     ->withResponsiveImages()
            //     ->toMediaCollection("hero-image");
        ];
    }
}
