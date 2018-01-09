<?php

function gd_get_locale() {
    static $currentLang = false;
    if(!$currentLang) {
        $cookieLang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : '';
        if($cookieLang == 'RU') {
            $currentLang = 'RU';
        } else {
            $currentLang = 'UA';
        }
    }
    return $currentLang;
}

function gd_local_sufix($key) {
    if (gd_get_locale() == 'RU') {
        return $key . '_ru';
    }
    return $key;
}

function gd_get_option_t($key, $default = null) {
    return gd_get_option(gd_local_sufix($key), $default);
}

function gd_get_post_option_t($key, $postId = false) {
    return gd_get_post_option(gd_local_sufix($key), $postId);
}

function gd_get_array_t($array, $key, $default = '') {
    return gd_get_array($array, gd_local_sufix($key), $default);
}

function gd_eh_array_t($array, $key, $default = '') {
    echo gd_get_array_t($array, $key, $default);
}
