<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

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
            Textarea::make("Title")
                ->rows(2)
                ->maxlength(30)
                ->enforceMaxlength(),
            MediaHubField::make("Image"),
        ];
    }
}
