<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Image as NovaImage;
use Laravel\Nova\Fields\Select;
use App\Nova\Actions\SaveAndResizeImage;
use Illuminate\Support\Facades\Storage;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Image extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "image";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Image";

    /**
     * Enable preview for this layout
     *
     * @var string
     */
    protected $preview = true;

    public static $imageSizes = [
        "image" => [1280, 720],
    ];

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            NovaImage::make("Image")
                ->disk("public")
                ->preview(function ($value, $disk) {
                    return $value ? Storage::disk($disk)->url($value) : null;
                })
                ->store(new SaveAndResizeImage()),
            Select::make("Background colour")->options([
                "" => "None",
                "teal" => "Teal",
                "lilac" => "Lilac",
                "red" => "Red",
                "gray" => "Grey",
                "black" => "Black",
            ]),
        ];
    }
}
