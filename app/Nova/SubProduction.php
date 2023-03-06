<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Slug;
use Whitecube\NovaFlexibleContent\Flexible;

use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class SubProduction extends Resource
{
    public static $displayInNavigation = false;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\SubProduction::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = "title";

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = ["title"];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()
                ->sortable()
                ->hideFromIndex(),
            Text::make("Title")
                ->rules("required", "string", "max:30")
                ->maxlength(30)
                ->enforceMaxlength(),
            Slug::make("Slug")
                ->from("Title")
                ->hideFromIndex(),
            Text::make("Introduction")
                ->rules("required", "string", "max:250")
                ->hideFromIndex()
                ->maxlength(250)
                ->enforceMaxlength(),

            MediaHubField::make("Image"),

            Panel::make("Content", [
                Flexible::make("Content")
                    ->addLayout(
                        \App\Nova\Flexible\Layouts\ProductionHero::class
                    )
                    ->addLayout(\App\Nova\Flexible\Layouts\Reviews::class)
                    ->addLayout(
                        \App\Nova\Flexible\Layouts\TextWithSidebar::class
                    )
                    ->addLayout(
                        \App\Nova\Flexible\Layouts\TextWithPullout::class
                    )
                    ->addLayout(\App\Nova\Flexible\Layouts\Quote::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\WatchVideo::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\TextWithImage::class)
                    ->addLayout(
                        \App\Nova\Flexible\Layouts\TextWithRoundImage::class
                    )
                    ->addLayout(\App\Nova\Flexible\Layouts\Image::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\ImagePair::class)
                    ->enablePreview(
                        \Illuminate\Support\Facades\Vite::asset(
                            "resources/css/app.css"
                        )
                    ),
            ]),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
