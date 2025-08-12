<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HiOpportunityResource\Pages;
use App\Filament\Resources\HiOpportunityResource\RelationManagers;
use App\Models\HiOpportunity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use App\Models\OppInternship;
use App\Models\OppVolunteer;
use App\Models\OppCompetition;
use App\Models\OppExchange;
use App\Models\OppScholarship;


class HiOpportunityResource extends Resource
{
    protected static ?string $model = HiOpportunity::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        Section::make('General Info')->schema([
            TextInput::make('title')->required()->label('Judul Opportunities'),
            TextInput::make('subtitle')->required()->label('Subjudul'),
            TextInput::make('slug')->unique(ignoreRecord: true)->required(),
            Select::make('category')
                ->label('Kategori')
                ->options([
                    'internship' => 'Internship',
                    'volunteer' => 'Volunteer',
                    'competition' => 'Competition',
                    'exchange' => 'Exchange',
                    'beasiswa' => 'Beasiswa',
                ])
                ->required()
                ->reactive()
                ->afterStateUpdated(function ($state, callable $set) {
                    if ($state === 'internship') {
                        $set('sections', [
                            [
                                'section_title' => 'Jobdesc',
                                'subfields' => [
                                    ['label' => 'jobdesc-detail', 'value' => ''],
                                    ['label' => 'position', 'value' => ''],
                                    ['label' => 'salary', 'value' => ''],
                                    ['label' => 'benefit', 'value' => ''],
                                ],
                            ],
                            [
                                'section_title' => 'Requirement',
                                'subfields' => [
                                    ['label' => 'education', 'value' => ''],
                                    ['label' => 'skill', 'value' => ''],
                                ],
                            ],
                        ]);
                    }

                    if ($state === 'volunteer') {
                        $set('sections', [
                            [
                                'section_title' => 'Jobdesc',
                                'subfields' => [
                                    ['label' => 'description', 'value' => ''],
                                    ['label' => 'division', 'value' => ''],
                                    ['label' => 'benefit', 'value' => ''],
                                ],
                            ],
                        ]);
                    }

                    if ($state === 'competition') {
                        $set('sections', [
                            [
                                'section_title' => 'Details',
                                'subfields' => [
                                    ['label' => 'theme', 'value' => ''],
                                    ['label' => 'timeline', 'value' => ''],
                                    ['label' => 'reward', 'value' => ''],
                                ],
                            ],
                        ]);
                    }

                    if ($state === 'exchange') {
                        $set('sections', [
                            [
                                'section_title' => 'Program Info',
                                'subfields' => [
                                    ['label' => 'destination', 'value' => ''],
                                    ['label' => 'requirement', 'value' => ''],
                                    ['label' => 'language', 'value' => ''],
                                ],
                            ],
                        ]);
                    }

                    if ($state === 'beasiswa') {
                        $set('sections', [
                            [
                                'section_title' => 'Scholarship Info',
                                'subfields' => [
                                    ['label' => 'level', 'value' => ''],
                                    ['label' => 'major', 'value' => ''],
                                    ['label' => 'requirement', 'value' => ''],
                                    ['label' => 'benefit', 'value' => ''],
                                ],
                            ],
                        ]);
                    }
                }),
        ]),

        Section::make('Additional Sections')
            ->schema([
                Repeater::make('sections')
                    ->relationship('sections')
                    ->schema([
                        TextInput::make('section_title')->required(),
                        Repeater::make('subfields')
                            ->relationship('subfields')
                            ->schema([
                                TextInput::make('label')->required(),
                                TextInput::make('value')->required(),
                            ])
                            ->defaultItems(1)
                            ->reorderable(true),
                    ])
                    ->defaultItems(1)
                    ->reorderable(true),
            ])
            ->collapsible()
            ->collapsed(),
    ]);
}



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListHiOpportunity::route('/'),
            'create' => Pages\CreateHiOpportunity::route('/create'),
            'edit' => Pages\EditHiOpportunity::route('/{record}/edit'),
        ];
    }
}
