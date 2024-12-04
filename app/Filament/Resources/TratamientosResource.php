<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TratamientosResource\Pages;
use App\Models\Tratamientos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Hexters\HexaLite\Traits\HexAccess;

class TratamientosResource extends Resource
{
    use HexAccess;

    protected static ?string $permissionId = 'access.tratamientos';
    protected static ?string $descriptionPermission = 'Admin can manage User accounts';
    protected static ?string $model = Tratamientos::class;
    protected static ?string $navigationGroup = 'Control de Enfermeria';
    protected static ?string $navigationLabel = 'Tratamientos';
    protected static ?string $navigationIcon = 'heroicon-c-building-office';
    protected static ?int $navigationSort = 3;
    protected static ?array $subPermissions = [
        'access.tratamientos.create' => 'Can Create',
        'access.tratamientos.edit' => 'Can Edit',
        'access.tratamientos.delete' => 'Can Delete',
    ];
    public static function canAccess(): bool
{
    return hexa()->can(static::$permissionId);
}

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Select::make('pacientes_id')
                ->relationship(name: 'pacientes', titleAttribute:'name')
                ->required()
                ->searchable()
                ->preload()
                ->live(),
                Forms\Components\Select::make('type')
                ->required()
                ->options([
                    'quemaduras' => 'Quemaduras',
                    'náusea y vómitos' => 'Náusea y vómitos',
                    'emergencia' => 'Emergencia',
                    'convulsiones' => 'Convulsiones',
                    'revision' => 'Revision',
                    'administración de fármacos' => 'Administración de fármacos',
                    'dolor' => 'Dolor',
                    'hipertensión arterial' => 'Hipertensión arterial',
                    'diabetes' => 'Diabetes',
                    'embarazo' => 'Embarazo',
                    'alergias' => 'Alergias',
                ]),
                Forms\Components\Textarea::make('notes')
                ->required()
                ->minLength(20)
                ->maxLength(300),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('pacientes.name')
                ->searchable(),
                Tables\Columns\TextColumn::make('notes')->listWithLineBreaks()->label('Notas'),
                Tables\Columns\TextColumn::make('type')->label('Tipo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->visible(hexa()->can('access.pacientes.edit')),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                    ->visible(hexa()->can('access.tratamientos.delete')),
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
            'index' => Pages\ListTratamientos::route('/'),
            'create' => Pages\CreateTratamientos::route('/create'),
            'edit' => Pages\EditTratamientos::route('/{record}/edit'),
        ];
    }
}
