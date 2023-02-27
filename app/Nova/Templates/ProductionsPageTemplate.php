<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;
use Whitecube\NovaFlexibleContent\Flexible;

class ProductionsPageTemplate
{
    public static function name(): string
    {
        return "productions-page";
    }

    public static function label(): string
    {
        return "Productions page";
    }

    public static function unique(): bool
    {
        return true;
    }

    // Fields displayed in CMS
    public function fields(Request $request): array
    {
        return [];
    }

    // Resolve data for serialization
    public function resolve($page)
    {
        $page->productions = \App\Models\Production::latest()->get();
        return $page;
    }
}
