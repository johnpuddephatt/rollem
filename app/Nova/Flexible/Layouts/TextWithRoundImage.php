<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Manogi\Tiptap\Tiptap;
use App\Nova\Actions\SaveAndResizeImage;
use Illuminate\Support\Facades\Storage;
use Trin4ik\NovaSwitcher\NovaSwitcher;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class TextWithRoundImage extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "text-with-round-image";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Text With Round Image";

    /**
     * Enable preview for this layout
     *
     * @var string
     */
    protected $preview = true;

    public static $imageSizes = [
        "image" => [640, 640],
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
            NovaSwitcher::make("Large"),

            Text::make("Title"),
            Text::make("Subtitle"),

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
