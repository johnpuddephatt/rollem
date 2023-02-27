<?php
namespace App\Nova\Actions;

use Laravel\Nova\Http\Requests\NovaRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

class SaveAndResizeImage
{
    /**
     * Store the incoming file upload.
     */
    public function __invoke(
        NovaRequest $request,
        $model,
        $attribute,
        $requestAttribute,
        $disk,
        $storagePath
    ) {
        $dimensions = $model::$imageSizes[$attribute];
        $filename = $request->$attribute->hashName() . ".jpg";
        Storage::disk($disk)->put(
            $filename,
            InterventionImage::make($request->$attribute)
                ->fit($dimensions[0], $dimensions[1])
                ->encode("jpg", 75)
        );

        return $filename;
    }
}
