<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Image;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Illuminate\Support\Facades\Storage;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\URL;
use Manogi\Tiptap\Tiptap;
use App\Nova\Actions\SaveAndResizeImage;

class FeatureBanner extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "feature-banner";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Feature banner";

    /**
     * The preview Blade view for this layout
     *
     * @var string
     */
    protected $preview = true;

    public static $imageSizes = [
        "image" => [1680, 1050],
    ];

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

            Text::make("Pre-title", "pretitle"),
            Text::make("Title"),
            Tiptap::make("Description")->buttons(["italic", "bold", "link"]),
            URL::make("Link"),
            Select::make("Colour")->options([
                "black" => "Black",
                "teal" => "Teal",
            ]),
        ];
    }
}
