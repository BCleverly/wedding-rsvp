<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PointOfInterestResource\Pages;
use App\Filament\Resources\PointOfInterestResource\RelationManagers;
use App\Models\PointOfInterest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PointOfInterestResource extends Resource
{
    protected static ?string $model = PointOfInterest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('description')->required(),
                Forms\Components\Select::make('cost')->options([
                    '1' => __('Inexpensive'),
                    '2' => __('Moderate'),
                    '3' => __('Expensive'),
                    '4' => __('Very Expensive'),
                ]),
                Forms\Components\Select::make('distance_to_venue')->options([
                    '1' => __('Walking distance'),
                    '2' => __('~ 30 minutes'),
                    '3' => __('30+ minutes'),
                    '4' => __('1h +'),
                ]),

                Forms\Components\SpatieTagsInput::make('tags')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\SpatieTagsColumn::make('tags')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPointOfInterests::route('/'),
            'create' => Pages\CreatePointOfInterest::route('/create'),
            'view' => Pages\ViewPointOfInterest::route('/{record}'),
            'edit' => Pages\EditPointOfInterest::route('/{record}/edit'),
        ];
    }
}
