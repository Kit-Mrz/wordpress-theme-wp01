<?php

namespace Wp01\Inc\Util;

class GeneralUtil
{
    use Singleton;

    protected static string $homeUrl;
    protected static string $themeFileUri;

    public function __construct()
    {
        self::$homeUrl      = esc_url(home_url('/'));
        self::$themeFileUri = esc_url(get_theme_file_uri());
    }

    public static function getHomeUrl()
    {
        return self::$homeUrl;
    }

    public static function getThemeFileUri()
    {
        return self::$themeFileUri;
    }


}
