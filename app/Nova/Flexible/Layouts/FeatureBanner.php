<?php

namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\URL;
use Manogi\Tiptap\Tiptap;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

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
            Text::make("Pre-title", "pretitle"),
            Text::make("Title"),
            Tiptap::make("Description")->buttons(["italic", "bold", "link"]),
            Text::make("Link"),
            Select::make("Colour")->options([
                "black" => "Black",
                "teal" => "Teal",
            ]),
        ];
    }
}
