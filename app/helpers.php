<?php

if (! function_exists('recurseCopy')) {
    function recurseCopy($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (('.' != $file) && ('..' != $file)) {
                if (is_dir($src.'/'.$file)) {
                    recurseCopy($src.'/'.$file, $dst.'/'.$file);
                } else {
                    copy($src.'/'.$file, $dst.'/'.$file);
                }
            }
        }
        closedir($dir);
    }
}
