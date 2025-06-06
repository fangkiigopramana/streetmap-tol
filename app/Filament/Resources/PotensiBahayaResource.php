<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PotensiBahayaResource\Pages;
use App\Filament\Resources\PotensiBahayaResource\RelationManagers;
use App\Models\JenisInfrastruktur;
use App\Models\Lokasi;
use App\Models\PotensiBahaya;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PotensiBahayaResource extends Resource
{
    protected static ?string $model = PotensiBahaya::class;

    protected static ?string $navigationIcon = 'heroicon-o-exclamation-triangle';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('lokasi_id')
                    ->relationship('lokasi', 'nama')
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('nama')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('latitude')
                            ->required(),
                        Forms\Components\TextInput::make('longitude')
                            ->required(),
                    ]),
                Forms\Components\Select::make('risk_level_id')
                    ->relationship('riskLevel', 'name')
                    ->required()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\ColorPicker::make('color')
                            ->default('#000000') // Default color set to black
                            ->required()
                            ->label('Color')
                            ->helperText('Pilih warna untuk level risiko ini.'),
                    ]),
                Forms\Components\Select::make('infrastruktur_id')
                    ->relationship('jenisInfrastruktur', 'nama')
                    ->required(),
                Forms\Components\TextInput::make('potensi_bahaya')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('effect_of_failure')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No')
                    ->rowIndex()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenisInfrastruktur.nama')
                    ->numeric()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('effect_of_failure')
                    ->searchable(),
                Tables\Columns\TextColumn::make('riskLevel.name')
                    ->label('Level Risiko')
                    ->sortable()
                    ->badge()
                    ->color(fn ($record) => $record->riskLevel ? $record->riskLevel->color : 'gray')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultGroup('lokasi.nama')
            ->searchable()
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
            'index' => Pages\ListPotensiBahayas::route('/'),
            'create' => Pages\CreatePotensiBahaya::route('/create'),
            'edit' => Pages\EditPotensiBahaya::route('/{record}/edit'),
        ];
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['lokasi_id']) && !is_numeric($data['lokasi_id'])) {
            $lokasi = Lokasi::where('nama', $data['lokasi_id'])->first();
            if ($lokasi) {
                $data['lokasi_id'] = $lokasi->id;
            }
        }

        if (isset($data['infrastruktur_id']) && !is_numeric($data['infrastruktur_id'])) {
            $jenis = JenisInfrastruktur::where('nama', $data['infrastruktur_id'])->first();
            if ($jenis) {
                $data['infrastruktur_id'] = $jenis->id;
            }
        }

        return $data;
    }
}
