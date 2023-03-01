 @php
     $publication_setting = Illuminate\Support\Arr::first($settings['publications'], function ($value, $key) use ($publication) {
         return $value['publication_name'] == $publication;
     });
 @endphp

 @if ($publication ?? false)
     @php $logo = $publication_setting['publication_logo'] ?? null @endphp
 @endif

 @if ($logo ?? false)
     {!! str_replace('<svg', '<svg class="' . $class . '"', $logo) !!}
 @else
     {{ $publication }}
 @endif
