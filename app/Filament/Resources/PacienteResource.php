<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PacienteResource\Pages;
use Filament\Forms\Components\Section;
use App\Models\Paciente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Hexters\HexaLite\Traits\HexAccess;
use App\Models\State;

class PacienteResource extends Resource
{
    use HexAccess;

    protected static ?string $permissionId = 'access.pacientes';
    protected static ?string $descriptionPermission = 'Admin can manage User accounts';
    protected static ?string $model = Paciente::class;
    protected static ?string $navigationGroup = 'Control de Enfermeria';
    protected static ?string $navigationLabel = 'Pacientes';
    protected static ?string $navigationIcon = 'heroicon-c-building-office-2';
    protected static ?int $navigationSort = 1;
    protected static ?array $subPermissions = [
        'access.pacientes.create' => 'Can Create',
        'access.pacientes.edit' => 'Can Edit',
        'access.pacientes.delete' => 'Can Delete',
    ];
    public static function canAccess(): bool
    {
        return hexa()->can(static::$permissionId);
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informacion del Paciente')
                ->columns(5)
                ->schema([
                    // ...
                    Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\DatePicker::make('date_of_birth')
                    ->required(),
                    Forms\Components\TextInput::make('cedula')
                    ->required()
                    ->maxLength(10),
                    Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(11),
                    Forms\Components\TextInput::make('email')
                    ->required()
                    ->maxLength(255),
                ]),
                Section::make('Direccion del paciente')
                ->columns(2)
                ->schema([
                    // ...
                    Forms\Components\Select::make('state_id')
                    ->label('Estado')
                    ->options(State::all()->pluck('name', 'id')->toArray())
                    ->required()
                    ->reactive(),
                    Forms\Components\Select::make('municipality_id')
                    ->required()
                    ->label('Municipio')
                    ->options(function (callable $get) {
                        $state = State::find($get('state_id'));
                        if(!$state) {
                            return [
                                'null' => 'No hay Estado Seleccionado'
                            ];
                        }
                        return $state->municipality->pluck('name', 'id');
                    }),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Nombre completo')
            ->searchable(),
            Tables\Columns\TextColumn::make('date_of_birth')->label('Fecha de nacimiento'),
            Tables\Columns\TextColumn::make('cedula'),
            Tables\Columns\TextColumn::make('state.name')
            ->label('Estado'),
            Tables\Columns\TextColumn::make('municipality.name')
            ->label('Municipio'),
            Tables\Columns\TextColumn::make('phone')->label('Teléfono'),
            Tables\Columns\TextColumn::make('email')->label('Correo electrónico'),
            Tables\Columns\TextColumn::make('created_at')->label('Fecha de ingreso')
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
                Tables\Actions\EditAction::make()
                ->visible(hexa()->can('access.pacientes.edit')),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible(hexa()->can('access.pacientes.delete'))
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
            'index' => Pages\ListPacientes::route('/'),
            'create' => Pages\CreatePaciente::route('/create'),
            'edit' => Pages\EditPaciente::route('/{record}/edit'),
        ];
    }
}
