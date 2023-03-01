<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Select;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
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

    protected $casts = [
        "image" => \App\Casts\NovaMediaLibraryCast::class,
    ];

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            MediaHubField::make("Image"),
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
