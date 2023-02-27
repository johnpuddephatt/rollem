<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Fields\Select;
use App\Nova\Actions\SaveAndResizeImage;
use Intervention\Image\Facades\Image as InterventionImage;

class WatchVideo extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "watch-video";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Watch video";

    /**
     * Enable preview for this layout
     *
     * @var string
     */
    protected $preview = true;

    public static $imageSizes = [
        "image" => [1200, 720],
    ];

    public function imagePreviews()
    {
        return [
            "image" => function ($file) {
                $filename = "temp_uploads" . "/" . $file->hashName() . ".jpg";
                Storage::disk("public")->put(
                    $filename,
                    InterventionImage::make($file)
                        ->fit(729, 468)
                        ->encode("jpg", 75)
                );
                return $filename;
            },
        ];
    }

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Image::make("Image")
                ->disk("public")
                ->preview(function ($value, $disk) {
                    return $value ? Storage::disk($disk)->url($value) : null;
                })
                ->store(new SaveAndResizeImage()),
            Text::make("Pretitle")->default("Pre-title (optional)"),
            Text::make("Title")->default("Video title"),
            Text::make("Subtitle")->default("e.g. year"),
            Textarea::make("Badge")->rows(2),
            URL::make("Link"),
            Select::make("Colour")
                ->options([
                    "teal" => "Teal",
                    "red" => "Red & black",
                ])
                ->default("teal"),
        ];
    }
}
