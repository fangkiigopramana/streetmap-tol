<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisInfrastrukturResource\Pages;
use App\Filament\Resources\JenisInfrastrukturResource\RelationManagers;
use App\Models\JenisInfrastruktur;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisInfrastrukturResource extends Resource
{
    protected static ?string $model = JenisInfrastruktur::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\ColorPicker::make('warna')
                    ->default('#000000')
                    ->label('Warna Kategori')
                    ->helperText('Pilih warna untuk kategori ini.'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\ColorColumn::make('warna'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListJenisInfrastrukturs::route('/'),
            'create' => Pages\CreateJenisInfrastruktur::route('/create'),
            'edit' => Pages\EditJenisInfrastruktur::route('/{record}/edit'),
        ];
    }
}
