<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class WeddingSettings extends Settings
{

    public string $name;

    public string $bride;

    public string $groom;

    public string $location_name;

    public string $lat_long;

    public string $description;

    public string $menu;

    public string $menu_url;

    public string $date_start;

    public string $date_end;

    public static function group(): string
    {
        return 'wedding';
    }
}
