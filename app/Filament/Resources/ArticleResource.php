<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Article';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // 
                Section::make('Informasi Artikel')
                    ->description('Tambahkan informasi tentang artikel')
                    ->schema([
                        TextInput::make('title')->required()
                            ->live(debounce: 700)
                            ->debounce(700)
                            ->placeholder('Judul')
                            ->label('Judul Artikel')
                            ->minLength(1)->maxLength(255)
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('slug')->required()
                            ->label('Link Judul Artikel')
                            ->minLength(1)
                            ->maxLength(255)
                            ->placeholder('slug adalah link untuk judul')
                            ->unique(ignoreRecord: true)
                            ->required(),
                        Hidden::make('user_id')->dehydrateStateUsing(fn() => Auth::id()),
                        TiptapEditor::make('description')
                            ->label('Deskripsi')
                            ->placeholder('Deskripsi Singkat Tentang Artikel')
                            ->columnSpanFull()
                            ->profile('minimal')
                            ->required()
                            ->output(TiptapOutput::Html),

                        TiptapEditor::make('content')
                            ->label('Konten')
                            ->placeholder('Konten Artikel')
                            ->columnSpanFull()
                            ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/jpg'])
                            ->maxFileSize(1024 * 2)
                            ->disk('public')
                            ->required()
                            ->output(TiptapOutput::Html)
                            ->directory('articles/attachments'),
                    ])->columnSpan(2)->columns(2),

                Section::make('Informasi Tambahan')
                    ->schema([
                        // FileUpload::make('thumbnail')->image()->required()
                        //     ->label('Thumbnail')
                        //     ->image()
                        //     ->directory('articles/thumbnails')
                        //     ->uploadingMessage('Sedang Mengunggah Thumbnail'),
                        SpatieMediaLibraryFileUpload::make('thumbnail')
                            ->label('Thumbnail')
                            ->image()
                            ->imageEditor()
                            ->required()
                            ->rules('mimes:jpeg,png,svg,gif,webp')
                            ->maxFiles(1)
                            ->maxSize(2048),
                        Select::make('category_id')->required()
                            ->label('Kategori')
                            ->placeholder('-- Pilih Kategori --')
                            ->relationship('category', 'name')
                            ->options(Category::all()->pluck('name', 'id')->toArray()),
                        Select::make('status')->required()
                            ->label('Status')
                            ->placeholder('-- Pilih Status --')
                            ->options([
                                'draft' => 'Draft',
                                'publish' => 'Publish',
                            ]),
                        Hidden::make('published_at')->default(now()),
                    ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // show thumbnail
                SpatieMediaLibraryImageColumn::make('thumbnail')->label('Thumbnail'),

                TextColumn::make('title')->label('Judul')
                    ->limit(40)
                    ->searchable()
                    ->sortable(),
                TextColumn::make('user.name')->label('Author')->sortable(),
                TextColumn::make('category.name')->label('Kategori')->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(function (string $state): string {
                        if ($state == "publish") return "success";
                        if ($state == "draft") return "warning";
                        return "secondary";
                    }),
            ])
            ->filters([
                // Filter::make("Artikel Yang Dipublish")->query(function (Builder $query) {
                //     return $query->where('status', 'publish');
                // }),


                // Filter::make("Artikel Yang Belum Dipublish")->query(function (Builder $query) {
                //     return $query->where('status', 'draft');
                // }),

                SelectFilter::make('status')
                    ->label('Status Artikel')
                    ->options([
                        'draft' => 'Artikel yang didraft',
                        'publish' => 'Artikel yang dipublish',
                    ]),

                SelectFilter::make('category_id')
                    ->label('Kategori')
                    ->relationship('category', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
