<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Schema\ForeignIdColumnDefinition;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title'),
                Forms\Components\MarkdownEditor::make('content'),
                Forms\Components\Hidden::make('user_id')
                    ->default(Filament::auth()->id()),

//                Forms\Components\TextInput::make('user_id')
//                    ->required()
//                    ->default(
//                        Filament::auth()->id()
//                    )->readOnly()
//                    ->hidden(),
                Forms\Components\Toggle::make('is_active')->default(true),
                Forms\Components\FileUpload::make('thumbnail')
                    ->columns(1)
                    ->directory('articles-images')
                    ->storeFileNamesIn('original_filename'),
                Forms\Components\FileUpload::make('image')
                    ->columns(1)
                    ->directory('articles-images')
                    ->storeFileNamesIn('original_filename'),

            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('category_id'),
                Tables\Columns\TextColumn::make('is_active'),

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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
