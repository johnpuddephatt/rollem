<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use Whitecube\NovaFlexibleContent\Flexible;

class PostsPageTemplate
{
    public static function name(): string
    {
        return "posts-page";
    }

    public static function label(): string
    {
        return "Posts page";
    }

    public static function unique(): bool
    {
        return true;
    }

    // Fields displayed in CMS
    public function fields(Request $request): array
    {
        return [
            Panel::make("Page content", [
                Flexible::make("", "content")
                    ->addLayout(\App\Nova\Flexible\Layouts\FeaturedPosts::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\LatestPosts::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\FeaturedPost::class)
                    ->enablePreview(
                        \Illuminate\Support\Facades\Vite::asset(
                            "resources/css/app.css"
                        )
                    )
                    ->stacked(),
            ]),
        ];
    }

    // Resolve data for serialization
    public function resolve($page)
    {
        return $page->content;
    }
}
