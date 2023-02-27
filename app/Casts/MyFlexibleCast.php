<?php

namespace App\Casts;

use Whitecube\NovaFlexibleContent\Value\FlexibleCast;

class MyFlexibleCast extends FlexibleCast
{
    protected $layouts = [
        "hero" => \App\Nova\Flexible\Layouts\Hero::class,
        "latest-posts" => \App\Nova\Flexible\Layouts\LatestPosts::class,
        "featured-posts" => \App\Nova\Flexible\Layouts\FeaturedPosts::class,
        "featured-post" => \App\Nova\Flexible\Layouts\FeaturedPost::class,
        "quote" => \App\Nova\Flexible\Layouts\Quote::class,
        "team" => \App\Nova\Flexible\Layouts\Team::class,
        "reviews" => \App\Nova\Flexible\Layouts\Reviews::class,
        "statement" => \App\Nova\Flexible\Layouts\Statement::class,
        "text-with-links" => \App\Nova\Flexible\Layouts\TextWithLinks::class,
        "text-with-sidebar" =>
            \App\Nova\Flexible\Layouts\TextWithSidebar::class,
        "text-with-section-navigation" =>
            \App\Nova\Flexible\Layouts\TextWithSectionNavigation::class,
        "featured-banner" => \App\Nova\Flexible\Layouts\FeatureBanner::class,
        "production-hero" => \App\Nova\Flexible\Layouts\ProductionHero::class,
    ];
}
