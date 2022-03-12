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

if( ! function_exists('locale_change_url') ){
    function locale_change_url()
    {
        $lang = request()->route()->parameter('lang');
        if( $lang == 'ja' ){
            $url = str_replace('/ja/', '/en/', url()->full());
        }else {
            $url = str_replace('/en/', '/ja/', url()->full());
        }
        return $url;
    }
}
