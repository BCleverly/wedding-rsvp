<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('wedding.name', 'The marraige of...');
        $this->migrator->add('wedding.bride', 'Bride');
        $this->migrator->add('wedding.groom', 'Groom');
        $this->migrator->add('wedding.location_name', '');
        $this->migrator->add('wedding.lat_long', '56.946285,24.105078');
        $this->migrator->add('wedding.description', '');
        $this->migrator->add('wedding.menu', '');
        $this->migrator->add('wedding.menu_url', '');
        $this->migrator->add('wedding.date_start', now());
        $this->migrator->add('wedding.date_end', now()->addDays(3));
    }
};
