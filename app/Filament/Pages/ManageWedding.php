<?php

namespace App\Filament\Pages;

use App\Settings\WeddingSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageWedding extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = WeddingSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\TextInput::make('bride')
                    ->required(),
                Forms\Components\TextInput::make('groom')
                    ->required(),
                Forms\Components\TextInput::make('location_name')
                    ->required(),
                Forms\Components\TextInput::make('lat_long')
                    ->required(),
                Forms\Components\TextInput::make('description')
                    ->required(),
                Forms\Components\TextInput::make('menu'),
                Forms\Components\TextInput::make('menu_url'),
                Forms\Components\DateTimePicker::make('date_start')
                    ->time()
                    ->required(),
                Forms\Components\DateTimePicker::make('date_end')
                    ->time()
                    ->required(),
            ]);
    }
}
