<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Outl1ne\NovaSimpleRepeatable\SimpleRepeatable;

class Reviews extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "reviews";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Reviews";

    /**
     * Enable preview for this layout
     *
     * @var string
     */
    protected $preview = true;

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            SimpleRepeatable::make("Reviews", "reviews", [
                Text::make("Show name", "name"),
                Textarea::make("Review")->alwaysShow(),
                Select::make("Rating")
                    ->options([1, 2, 3, 4, 5])
                    ->placeholder("Select a rating"),
                Select::make("Publication")
                    ->options(
                        \Illuminate\Support\Arr::pluck(
                            nova_get_setting("publications"),
                            "publication_name",
                            "publication_name"
                        )
                    )
                    ->placeholder("Select a publication"),
                Text::make("URL"),
            ])
                ->addRowLabel("Add new review")
                ->canAddRows(true) // Optional, true by default
                ->canDeleteRows(true), // Optional, true by default
        ];
    }
}
