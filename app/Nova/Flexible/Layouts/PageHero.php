<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\URL;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;
use Whitecube\NovaFlexibleContent\Flexible;

class PageHero extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "page-hero";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Page hero";

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
        return [Textarea::make("Title")->rows(2), MediaHubField::make("Image")];
    }
}
