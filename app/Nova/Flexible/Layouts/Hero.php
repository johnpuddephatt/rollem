<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Laravel\Nova\Fields\URL;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Flexible;

class Hero extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "hero";

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

    protected $casts = [
        "image" => \App\Casts\NovaMediaLibraryCast::class,
        "video" => \App\Casts\NovaMediaLibraryCast::class,
    ];
    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Textarea::make("Title")->rows(2),
            Textarea::make("Subtitle")->alwaysShow(),
            MediaHubField::make("Image"),
            MediaHubField::make("Video"),
            URL::make("Trailer URL", "trailer"),
        ];
    }
}
