<?php

if( ! function_exists('assets') ){
    function assets($path, $secure = null)
    {
        if( ! \File::exists($path) ){
            return asset($path, $secure);
        }
        $query = \File::lastModified($path);
        return asset($path . '?' . $query, $secure);
    }
}
