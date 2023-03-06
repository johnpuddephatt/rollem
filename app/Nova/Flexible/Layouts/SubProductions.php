<?php
namespace App\Nova\Flexible\Layouts;

use Whitecube\NovaFlexibleContent\Layouts\Layout;

class SubProductions extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = "sub-productions";

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = "Sub-productions";

    /**
     * Enable preview for this layout
     *
     * @var string
     */
    protected $preview = true;

    public function getSubProductionsAttribute()
    {
        return $this->model->subProductions;
    }

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
