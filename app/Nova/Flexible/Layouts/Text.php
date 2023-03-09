<?php
namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Manogi\Tiptap\Tiptap;

class Text extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "text";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Text";

    /**
     * Enable preview for this layout
     *
     * @var string
     */
    protected $preview = false;

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Tiptap::make("Content")
                ->buttons(["heading", "bold", "italic", "link", "blockquote"])
                ->headingLevels([2, 3])
                ->withMeta([
                    "extraAttributes" => [
                        "placeholder" => "Start writing...",
                    ],
                ]),
        ];
    }
}
