<?php

if (! function_exists('getImage')) {
    function getImage($path, bool $nullable = false)
    {
        $url = '';
        if (null !== $path) {
            $url = image_cache(str_replace('', '', $path), 'post');
        } else {
            $url = $nullable ? null : config('app.url').'/images/no-image.png';
        }

        return $url;
    }
}

if (! function_exists('getPath')) {
    function getPath($path)
    {
        return null !== $path ? config('app.url').'/'.$path : null;
    }
}

if (! function_exists('image_cache')) {
    /**
     * Resolve image url.
     *
     * @param $path
     * @param $size
     *
     * @return string
     */
    function image_cache($path, $size, $crop = true)
    {
        if (false !== strpos($path, 'http')) {
            return $path;
        }

        $thumbnail = get_thumbnail($path, $size);

        if (! $thumbnail['resolved']) {
            return asset("cache/resolve/$size/$path");
        }

        return asset($thumbnail['filepath']);
    }
}

if (! function_exists('get_thumbnail')) {
    /**
     * Resolve image url.
     *
     * @param $path
     * @param $size
     *
     * @return array
     */
    function get_thumbnail($path, $size, $crop = true)
    {
        $filename = md5("$size/$path").'.'.pathinfo($path, PATHINFO_EXTENSION);
        $thumbnailPath = "storage/cache/$filename";

        return [
            'resolved' => file_exists($thumbnailPath),
            'filename' => $filename,
            'filepath' => $thumbnailPath,
        ];
    }
}
