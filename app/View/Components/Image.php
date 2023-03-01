<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;

class Image extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $image = null,
        public string $conversion,
        public string $class,
        public string $id = ""
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->image) {
            return view("components.image");
        }
    }

    public function getSrc($conversion = null)
    {
        return Storage::disk($this->image->disk)->url(
            config("nova-media-hub.path_prefix") .
                "/{$this->image->id}/conversions/{$this->image->conversions[$conversion ??
                        $this->conversion]}"
        );
    }

    public function getSrcSet()
    {
        $conversions = \Illuminate\Support\Arr::where(
            $this->image->conversions,
            fn($value, $key) => str_starts_with($key, $this->conversion)
        );

        $configs =
            (config("nova-media-hub.image_conversions.*") ?? []) +
            (config(
                "nova-media-hub.image_conversions." .
                    $this->image->collection_name
            ) ??
                []);

        $output = [];
        foreach ($conversions as $conversion => $path) {
            $output[$configs[$conversion]["width"]] = $this->getSrc(
                $conversion
            );
        }

        ksort($output);
        $str = "";
        foreach ($output as $width => $url) {
            $str .= "{$url} {$width}w,";
        }
        rtrim($str, ",");

        return $str;
    }
}
