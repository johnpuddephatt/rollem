<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Textarea;
use Manogi\Tiptap\Tiptap;
use App\Nova\Actions\SaveAndResizeImage;
use Illuminate\Support\Facades\Storage;
use Trin4ik\NovaSwitcher\NovaSwitcher;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class TextWithImage extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "text-with-image";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Text With Image";

    /**
     * Enable preview for this layout
     *
     * @var string
     */
    protected $preview = true;

    public static $imageSizes = [
        "image" => [480, 640],
    ];

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            NovaSwitcher::make("Reverse"),

            Text::make("Title"),
            Text::make("Subtitle"),

            Textarea::make("Badge")
                ->help("Text wrapped in **asterisks** will appear black")
                ->rows(2),

            Tiptap::make("Main")
                ->buttons(["bold", "italic", "link", "blockquote"])
                ->withMeta([
                    "extraAttributes" => [
                        "placeholder" => "Start writing...",
                    ],
                ]),

            Image::make("Image")
                ->disk("public")
                ->preview(function ($value, $disk) {
                    return $value ? Storage::disk($disk)->url($value) : null;
                })
                ->store(new SaveAndResizeImage()),
        ];
    }
}
