<?php

namespace App\Filament\Resources\CourseResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class PagesRelationManager extends RelationManager
{
    protected static string $relationship = 'pages';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)->columnSpanFull(),
                Forms\Components\RichEditor::make('content')->columnSpanFull()->disableToolbarButtons(['attachFiles'])
                    ->required(),
                Forms\Components\FileUpload::make('media_url')->label('Video')
                    ->columnSpanFull()->preserveFilenames(),
                Forms\Components\FileUpload::make('additional_files')->label('Additional Files')->multiple()->preserveFilenames()
                ,
                Forms\Components\FileUpload::make('images')->label('Images')->multiple()->image()->imagePreviewHeight('150px')->preserveFilenames()

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()->modalWidth('6xl')->createAnother(false)->label('Add Page'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->modalWidth('6xl'),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
