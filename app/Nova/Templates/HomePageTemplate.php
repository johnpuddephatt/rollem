<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Panel;
use Whitecube\NovaFlexibleContent\Flexible;

class HomePageTemplate
{
    public static function name(): string
    {
        return "home-page";
    }

    public static function label(): string
    {
        return "Home page";
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
                    ->addLayout(\App\Nova\Flexible\Layouts\Hero::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Reviews::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Quote::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\Statement::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\FeaturedPosts::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\FeatureBanner::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\TextWithLinks::class)
                    ->addLayout(\App\Nova\Flexible\Layouts\WatchVideo::class)
                    ->addLayout(
                        \App\Nova\Flexible\Layouts\TextWithSidebar::class
                    )
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
