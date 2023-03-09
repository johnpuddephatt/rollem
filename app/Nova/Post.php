<?php

namespace App\Nova;

use App\Nova\Traits\RedirectsToIndexOnSave;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Panel;
use Whitecube\NovaFlexibleContent\Flexible;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Http\Requests\NovaRequest;
use Outl1ne\NovaMediaHub\Nova\Fields\MediaHubField;

class Post extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = "id";

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = ["id"];

    public static $clickAction = "edit";
    use RedirectsToIndexOnSave;

    public static function indexQuery(NovaRequest $request, $query)
    {
        return $query
            ->withoutGlobalScopes(["published_at"])
            ->orderBy("published_at", "desc");
    }

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
            MediaHubField::make("Image"),
            Text::make("Title")
                ->rules("required", "string", "max:50")
                ->maxlength(50)
                ->enforceMaxlength(),
            Slug::make("Slug")
                ->from("Title")
                ->hideFromIndex(),
            Text::make("Introduction")
                ->rules("required", "string", "max:150")
                ->hideFromIndex()
                ->maxlength(150)
                ->enforceMaxlength(),
            Date::make("Publish date", "published_at")->help(
                "Leave the date blank to mark this post as a draft."
            ),
            Badge::make("Status", "status", function () {
                return $this->published_at ? "published" : "draft";
            })->types([
                "draft" => ["font-bold", "bg-primary-100", "text-primary-600"],
                "published" => ["font-bold", "bg-green-100", "text-green-600"],
            ]),

            BelongsTo::make("Author", "author", User::class)->nullable(),
            Panel::make("Content", [
                Flexible::make("Flexible content", "content")
                    ->addLayout(\App\Nova\Flexible\Layouts\Text::class)
                    ->addLayout(
                        \App\Nova\Flexible\Layouts\TextWithSidebar::class
                    )
                    ->addLayout(
                        \App\Nova\Flexible\Layouts\TextWithPullout::class
                    )
                    ->addLayout(\App\Nova\Flexible\Layouts\Quote::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Image::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\ImagePair::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\WatchVideo::class)
                    ->enablePreview(
                        \Illuminate\Support\Facades\Vite::asset(
                            "resources/css/app.css"
                        )
                    )
                    ->stacked()
                    ->button("Add content"),
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
