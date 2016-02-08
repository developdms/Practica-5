<?php

/**
 * Description of Util
 *
 * @author MARTIN
 */
class Util {

    //put your code here
    private static function cleanURL($url, $keys = array()) {
        $url_parts = parse_url($url);
        if (empty($url_parts['query']))
            return $url;

        parse_str($url_parts['query'], $result_array);
        foreach ($keys as $key) {
            unset($result_array[$key]);
        }
        $url_parts['query'] = http_build_query($result_array);
        $url = (isset($url_parts["scheme"]) ? $url_parts["scheme"] . "://" : "") .
                (isset($url_parts["user"]) ? $url_parts["user"] . ":" : "") .
                (isset($url_parts["pass"]) ? $url_parts["pass"] . "@" : "") .
                (isset($url_parts["host"]) ? $url_parts["host"] : "") .
                (isset($url_parts["port"]) ? ":" . $url_parts["port"] : "") .
                (isset($url_parts["path"]) ? $url_parts["path"] : "") .
                (isset($url_parts["query"]) ? "?" . $url_parts["query"] : "") .
                (isset($url_parts["fragment"]) ? "#" . $url_parts["fragment"] : "");
        return $url;
    }

}
