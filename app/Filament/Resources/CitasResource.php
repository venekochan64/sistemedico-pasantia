<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CitasResource\Pages;
use App\Models\Citas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Hexters\HexaLite\Traits\HexAccess;

class CitasResource extends Resource
{
    use HexAccess;

    protected static ?string $permissionId = 'access.citas';
    protected static ?string $descriptionPermission = 'Admin can manage User accounts';
    protected static ?string $model = Citas::class;
    protected static ?string $navigationGroup = 'Control de Enfermeria';
    protected static ?string $navigationLabel = 'Citas';
    protected static ?string $navigationIcon = 'heroicon-c-building-office';
    protected static ?int $navigationSort = 2;
    protected static ?array $subPermissions = [
        'access.citas.create' => 'Can Create',
        'access.citas.edit' => 'Can Edit',
        'access.citas.delete' => 'Can Delete',
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
                    'revision' => 'Revision',
                    'emergencia' => 'Emergencia',
                ]),
                Forms\Components\Textarea::make('descripcion')
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
                Tables\Columns\TextColumn::make('created_at')->label('Fecha de ingreso'),
                Tables\Columns\TextColumn::make('descripcion')->listWithLineBreaks(),
                Tables\Columns\TextColumn::make('type')->label('Tipo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                        ->visible(hexa()->can('access.citas.edit')),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible(hexa()->can('access.citas.delete')),
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
            'index' => Pages\ListCitas::route('/'),
            'creater' => Pages\CreateCitas::route('/create'),
            'editer' => Pages\EditCitas::route('/{record}/edit'),
        ];
    }
}
